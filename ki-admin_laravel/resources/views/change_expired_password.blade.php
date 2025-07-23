<!DOCTYPE html>
<html lang="en">

@section('title', 'Cambiar Contraseña Vencida')
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
                        <div class="mb-4">
                            <a href="{{ route('login') }}" class="text-white-800 text-decoration-underline d-inline-flex align-items-center">
                                <i class="ph ph-arrow-left me-2"></i>
                                Regresar
                            </a>
                        </div>
                        
                        <form class="app-form" method="POST" action="{{ route('password.change.expired') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-white f-w-600">Cambiar <span class="text-dark">Contraseña</span> </h2>
                                        <p class="f-s-16 mt-2">Su contraseña ha vencido. Debe cambiarla para continuar.</p>
                                    </div>
                                </div>
                                
                                @if(session('error'))
                                    <div class="col-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                
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
                                        <input class="form-control" id="currentPassword" name="current_password" placeholder="Contraseña actual"
                                               type="password" required>
                                        <label for="currentPassword">
                                            <i class="ph ph-lock me-2"></i>
                                            Ingrese su contraseña anterior
                                        </label>
                                        @error('current_password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="newPassword" name="new_password" placeholder="Nueva contraseña"
                                               type="password" required>
                                        <label for="newPassword">
                                            <i class="ph ph-lock me-2"></i>
                                            Ingrese su nueva contraseña
                                        </label>
                                        @error('new_password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="confirmPassword" name="new_password_confirmation" placeholder="Confirmar nueva contraseña"
                                               type="password" required>
                                        <label for="confirmPassword">
                                            <i class="ph ph-lock me-2"></i>
                                            Repita la nueva contraseña
                                        </label>
                                        @error('new_password_confirmation')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary btn-lg w-100" type="submit">
                                        <i class="ph ph-key me-2"></i>
                                        Cambiar contraseña
                                    </button>
                                </div>
                                
                                <div class="col-12 mt-4">
                                    <div class="text-center text-lg-start f-w-500">
                                        ¿Recuerda su contraseña?
                                        <a class="text-white-800 text-decoration-underline" href="{{route('login')}}">Iniciar Sesión</a>
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

<!-- Modal de éxito -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-4">
                <div class="mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-success rounded-circle" style="width: 80px; height: 80px;">
                        <span class="text-white" style="font-size: 2.5rem; font-weight: bold;">✓</span>
                    </div>
                </div>
                <h4 class="mb-3">Contraseña actualizada</h4>
                <p class="text-muted mb-4">Ahora puede iniciar sesión con su nueva contraseña.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                    Iniciar sesión
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap js-->
<script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.app-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                console.log('Formulario de cambio de contraseña enviado!');
            });
        }
        
        // Mostrar modal de éxito si hay mensaje de éxito
        @if(session('success'))
            setTimeout(function() {
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            }, 100);
        @endif
    });
</script>

</body>

</html> 