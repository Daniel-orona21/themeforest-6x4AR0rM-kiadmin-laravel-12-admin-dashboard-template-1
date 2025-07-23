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
                                
                                <div class="col-12" id="successMessageContainer" style="display: none;">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="messageAlert">
                                        <span id="successMessageText"></span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                                
                                <!-- Step 1: Email Input -->
                                <div id="emailStep" class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" placeholder="Ingresa tu email"
                                               type="email" value="{{ old('email') }}" required>
                                        <label for="email">Dirección de Email</label>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-lg w-100" type="submit">Enviar Enlace de Restablecimiento</button>
                                    </div>
                                </div>

                                <!-- Step 2: Verification Code Input -->
                                <div id="codeStep" class="col-12" style="display: none;">
                                    <div class="mb-3">
                                        <label for="code" class="form-label text-white-800">Ingrese el código de 4 dígitos recibido:</label>
                                        <input class="form-control form-control-lg text-center" id="code" name="code"
                                               type="text" maxlength="4" pattern="\d{4}" inputmode="numeric" style="letter-spacing: 1rem;">
                                    </div>
                                    <div class="mt-3">
                                        <button id="verifyCodeBtn" class="btn btn-primary btn-lg w-100" type="button">Verificar Código</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-2">¿No recibiste el código?</p>
                                        <p class="mb-0">
                                            Revise la carpeta de SPAM o 
                                            <a href="#" id="resendCodeLink" class="text-primary text-decoration-underline">presione aquí para volver a enviar el código</a>.
                                        </p>
                                    </div>
                                </div>

                                <!-- Step 3: New Password Input -->
                                <div id="passwordStep" class="col-12" style="display: none;">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="newPassword" name="new_password" placeholder="Nueva contraseña"
                                               type="password" required>
                                        <label for="newPassword">
                                            <i class="ph ph-lock me-2"></i>
                                            Ingrese su nueva contraseña
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="confirmPassword" name="confirm_password" placeholder="Repita la nueva contraseña"
                                               type="password" required>
                                        <label for="confirmPassword">
                                            <i class="ph ph-lock me-2"></i>
                                            Repita la nueva contraseña
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <button id="changePasswordBtn" class="btn btn-primary btn-lg w-100" type="button">Cambiar contraseña</button>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="text-center text-lg-start f-w-500">
                                        ¿Recuerdas tu contraseña?
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

<!-- Modal de Éxito -->
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
        // --- DOM Elements ---
        const emailStep = document.getElementById('emailStep');
        const codeStep = document.getElementById('codeStep');
        const passwordStep = document.getElementById('passwordStep');
        
        const emailInput = document.getElementById('email');
        const codeInput = document.getElementById('code');
        const newPasswordInput = document.getElementById('newPassword');
        const confirmPasswordInput = document.getElementById('confirmPassword');

        const messageContainer = document.getElementById('successMessageContainer');
        const messageAlert = document.getElementById('messageAlert');
        const messageText = document.getElementById('successMessageText');
        
        const submitEmailBtn = emailStep.querySelector('button');
        const verifyCodeBtn = document.getElementById('verifyCodeBtn');
        const resendCodeLink = document.getElementById('resendCodeLink');
        const changePasswordBtn = document.getElementById('changePasswordBtn');

        // --- Utility Functions ---
        function showMessage(message, isError = false) {
            if (messageContainer && messageText && messageAlert) {
                messageText.textContent = message;
                messageAlert.classList.remove('alert-success', 'alert-danger');
                messageAlert.classList.add(isError ? 'alert-danger' : 'alert-success');
                messageContainer.style.display = 'block';
                messageContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        function showStep(stepToShow) {
            emailStep.style.display = 'none';
            codeStep.style.display = 'none';
            passwordStep.style.display = 'none';
            stepToShow.style.display = 'block';
        }

        // --- Step Logic Handlers ---
        function handleEmailSubmit() {
            if (!emailInput.value) return; // Do nothing if email is empty
            
            if (emailInput.value.toLowerCase() === 'error@example.com') {
                showMessage("El correo electrónico ingresado no está asignado a un usuario", true);
            } else {
                showStep(codeStep);
                showMessage("Código enviado al correo electrónico");
            }
        }

        function handleCodeVerification() {
            if (!codeInput.value) return;

            if (codeInput.value === '1234') {
                showStep(passwordStep);
                showMessage("Código correcto");
            } else {
                showMessage("Código incorrecto. Intente de nuevo", true);
            }
        }
        
        // Paso 3: Cambiar Contraseña
        function handleChangePassword() {
            if (newPasswordInput.value && confirmPasswordInput.value) {
                // Validación de formato de contraseña
                const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
                if (!passwordRegex.test(newPasswordInput.value)) {
                    showMessage("La nueva contraseña debe ser de al menos 8 caracteres, incluyendo una mayúscula y un número", true);
                    return;
                }

                if (newPasswordInput.value === confirmPasswordInput.value) {
                    const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                } else {
                    showMessage("Las contraseñas no coinciden", true);
                }
            }
        }

        // --- Event Listeners ---

        // Step 1: Email
        if (submitEmailBtn) {
            submitEmailBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleEmailSubmit();
            });
        }
        if (emailInput) {
            emailInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    handleEmailSubmit();
                }
            });
        }

        // Step 2: Code
        if (verifyCodeBtn) {
            verifyCodeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleCodeVerification();
            });
        }
        if (codeInput) {
            codeInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    handleCodeVerification();
                }
            });
        }

        // Step 3: Password
        if (changePasswordBtn) {
            changePasswordBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleChangePassword();
            });
        }
        const passwordFields = [newPasswordInput, confirmPasswordInput];
        passwordFields.forEach(field => {
            if (field) {
                field.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        handleChangePassword();
                    }
                });
            }
        });
        
        // Resend Code
        if (resendCodeLink) {
            resendCodeLink.addEventListener('click', function(e) {
                e.preventDefault();
                showMessage("Código enviado al correo electrónico");
            });
        }
    });
</script>

</body>

</html> 