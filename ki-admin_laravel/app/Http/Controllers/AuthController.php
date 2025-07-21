<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User; // Asegúrate de que el modelo User exista y sea usable

class AuthController extends Controller
{
    /**
     * Muestra el formulario de login.
     */
    public function showLoginForm()
    {
        return view('sign_in');
    }

    /**
     * Maneja el intento de login.
     */
    public function login(Request $request)
    {
        // Debug: Log the request data
        \Log::info('Login attempt', [
            'all_data' => $request->all(),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'method' => $request->method(),
            'url' => $request->url()
        ]);

        $credentials = $request->only('username', 'password');
        $username = $credentials['username'];

        if (($username === 'admin' || $username === 'empleado') && !empty($credentials['password'])) {
            // Crear un usuario que Laravel pueda reconocer
            $user = new User();
            $user->id = ($username === 'admin') ? 1 : 2;
            $user->name = ucfirst($username);
            $user->email = $username . '@example.com';
            $user->password = bcrypt('password'); // Agregar password hasheado
            $user->remember_token = null;
            $user->exists = true; // Marcar como que existe en la base de datos
            
            // Iniciar sesión
            Auth::login($user, true); // true = remember me
            
            // Guardar datos en la sesión
            $request->session()->put('role', $username);
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            
            // Regenerar ID de sesión por seguridad
            $request->session()->regenerate();

            \Log::info('Login successful', ['username' => $username, 'user_id' => $user->id]);
            
            // Redirigir según el rol
            if ($username === 'admin') {
                return redirect()->intended('index');
            } else {
                return redirect()->intended('recibos');
            }
        }

        \Log::info('Login failed', ['username' => $username, 'password_provided' => !empty($credentials['password'])]);
        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas no son válidas.',
        ]);
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign_in');
    }
}
