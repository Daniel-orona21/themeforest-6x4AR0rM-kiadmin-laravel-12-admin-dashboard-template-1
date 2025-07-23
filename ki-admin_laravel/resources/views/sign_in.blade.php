<!DOCTYPE html>
<html lang="en">

@section('title', 'Sign In')
@include('layout.head')

@include('layout.css')
<!-- phosphor-icon css-->
<link href="{{asset('../assets/vendor/phosphor/phosphor-bold.css')}}" rel="stylesheet">
<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <div class="container main-container">
            <div class="row main-content-box">
                <div class="col-lg-7 image-content-box d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                            <span>
                              <img alt="" class="img-fluid " src="../assets/images/logo/1.png">
                            </span>
                        </div>

                        <div class="signup-bg-img">
                            <img alt="" class="img-fluid" src="../assets/images/login/01.png">
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 form-content-box">
                    <div class="form-container ">
                        <form class="app-form" method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-white f-w-600">¡Bienvenido a <span class="text-dark">ki-admin!</span> </h2>
                                        <p class="f-s-16 mt-2">Inicia sesión con los datos que ingresaste durante tu
                                            registro</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="UserName" name="username" placeholder="Usuario o Email"
                                               type="text" value="{{ old('username') }}">
                                        <label for="UserName">Usuario</label>
                                        @error('username')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="floatingInput" name="password" placeholder="Contraseña"
                                               type="password">
                                        <label for="floatingInput">Contraseña</label>

                                    </div>
                                    <div class="text-end ">
                                        <a class="text-dark f-w-500 text-decoration-underline" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check d-flex align-items-center gap-2 mb-3">
                                        <input class="form-check-input w-25 h-25" id="checkDefault" type="checkbox"
                                               value="">
                                        <label class="form-check-label text-white mt-2 f-s-16 text-dark"
                                               for="checkDefault">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary btn-lg w-100" type="submit">Iniciar Sesión</button>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="text-center text-lg-start f-w-500">
                                        ¿No tienes una cuenta aún?
                                        <a class="text-white-800 text-decoration-underline" href="{{route('sign_up')}}">Regístrate</a>
                                    </div>
                                </div>

                                <div class="app-divider-v light justify-content-center py-lg-5 py-3">
                                    <p>O</p>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex gap-3 justify-content-center text-center">
                                        <button class="btn btn-light-white  icon-btn w-45 h-45 b-r-15 " type="button">
                                            <i class="ph-bold ph-facebook-logo f-s-20"></i>
                                        </button>
                                        <button class="btn btn-light-white  icon-btn w-45 h-45 b-r-15 " type="button">
                                            <i class="ph-bold  ph-google-logo f-s-20"></i>
                                        </button>
                                        <button class="btn btn-light-white  icon-btn w-45 h-45 b-r-15 " type="button">
                                            <i class="ph-bold  ph-twitter-logo f-s-20"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Body main section ends -->
    </div>
</div>

<!-- Modal de Contraseña Vencida -->
<div class="modal fade" id="expiredPasswordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-4">
                <div class="mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-warning rounded-circle" style="width: 80px; height: 80px;">
                        <i class="ti ti-alert-triangle text-white" style="font-size: 2.5rem;"></i>
                    </div>
                </div>
                <h4 class="mb-3">Contraseña vencida</h4>
                <p class="text-muted mb-4">Acorde a las políticas de la empresa, debe cambiar su contraseña para poder acceder al sistema.</p>
                <div class="d-flex gap-2 justify-content-center">
                    <a href="{{ route('password.change.expired.form') }}" class="btn btn-warning btn-lg">
                        Cambiar contraseña
                    </a>
                    <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap js-->
<script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.app-form');
        const passwordInput = document.getElementById('floatingInput');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Verificar si la contraseña es "contraseñavencida"
                if (passwordInput && passwordInput.value === 'contraseñavencida') {
                    const modal = new bootstrap.Modal(document.getElementById('expiredPasswordModal'));
                    modal.show();
                    
                    // Agregar evento para redireccionar cuando se cierre el modal
                    document.getElementById('expiredPasswordModal').addEventListener('hidden.bs.modal', function () {
                        window.location.href = "{{ route('password.change.expired.form') }}";
                    });
                } else {
                    // Continuar con el envío normal del formulario
                    form.submit();
                }
            });
        }
    });
</script>

</body>

</html>
