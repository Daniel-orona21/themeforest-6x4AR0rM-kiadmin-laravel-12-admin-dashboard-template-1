<!DOCTYPE html>
<html lang="en">

@section('title', 'Forgot Password')
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
                        <form class="app-form" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-white f-w-600">¿Olvidaste tu <span class="text-dark">Contraseña?</span> </h2>
                                        <p class="f-s-16 mt-2">Ingresa tu dirección de email y te enviaremos un enlace para restablecer tu contraseña</p>
                                    </div>
                                </div>
                                
                                @if(session('success'))
                                    <div class="col-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" placeholder="Ingresa tu email"
                                               type="email" value="{{ old('email') }}" required>
                                        <label for="email">Dirección de Email</label>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary btn-lg w-100" type="submit">Enviar Enlace de Restablecimiento</button>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="text-center text-lg-start f-w-500">
                                        ¿Recuerdas tu contraseña?
                                        <a class="text-white-800 text-decoration-underline" href="{{route('login')}}">Iniciar Sesión</a>
                                    </div>
                                </div>

                                <div class="app-divider-v light justify-content-center py-lg-5 py-3">
                                    <p>OR</p>
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


    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <script>
        // Debug: Check if form is being submitted
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.app-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    console.log('Forgot password form submitted!');
                    console.log('Form data:', new FormData(form));
                });
            }
        });
    </script>

</body>

</html> 