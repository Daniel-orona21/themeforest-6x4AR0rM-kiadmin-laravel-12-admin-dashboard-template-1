<!-- Menu Navigation starts -->
<nav>
    <div class="app-logo">
        <a class="logo d-inline-block" href="{{route('index')}}">
            <img alt="#" src="{{asset('../assets/images/logo/1.png')}}">
        </a>

        <span class="bg-light-primary toggle-semi-nav d-flex-center">
                <i class="ti ti-chevron-right"></i>
            </span>

        <div class="d-flex align-items-center nav-profile p-3">
                <span class="h-45 w-45 d-flex-center b-r-10 position-relative bg-danger m-auto">
                    <img alt="avatar" class="img-fluid b-r-10" src="{{asset('../assets/images/avatar/woman.jpg')}}">
                    <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                </span>
            <div class="flex-grow-1 ps-2">
                <h6 class="text-primary mb-0"> Ninfa Monaldo</h6>
                <p class="text-muted f-s-12 mb-0">Web Developer</p>
            </div>


            <div class="dropdown profile-menu-dropdown">
                <a aria-expanded="false" data-bs-auto-close="true" data-bs-placement="top" data-bs-toggle="dropdown"
                   role="button">
                    <i class="ti ti-settings fs-5"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a class="f-w-500" href="{{route('profile')}}" target="_blank">
                            <i class="ph-duotone  ph-user-circle pe-1 f-s-20"></i> Profile Details
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="f-w-500" href="{{route('setting')}}" target="_blank">
                            <i class="ph-duotone  ph-gear pe-1 f-s-20"></i> Settings
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a class="f-w-500" href="#">
                                    <i class="ph-duotone  ph-detective pe-1 f-s-20"></i> Incognito
                                </a>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" id="incognitoSwitch"
                                           type="checkbox">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <a class="mb-0 text-secondary f-w-500" href="{{route('sign_up')}}" target="_blank">
                            <i class="ph-bold  ph-plus pe-1 f-s-20"></i> Add account
                        </a>
                    </li>

                    <li class="app-divider-v dotted py-1"></li>

                    <li class="dropdown-item">
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="mb-0 text-danger border-0 bg-transparent" style="text-decoration: none;">
                                <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="app-nav" id="app-simple-bar">
        <ul class="main-nav p-0 mt-2">
            @if(session('role') == 'admin')
                <li class="no-sub">
                    <a href="{{route('index')}}">
                        <svg stroke="currentColor" stroke-width="1.5">
                            <use xlink:href="../assets/svg/_sprite.svg#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
            @endif
            
            @if(session('role') == 'admin')
                <li class="no-sub">
                    <a href="{{route('usuarios')}}">
                        <svg stroke="currentColor" stroke-width="1.5">
                            <use xlink:href="../assets/svg/_sprite.svg#queue-list"></use>
                        </svg>
                        Usuarios
                    </a>
                </li>
            @endif

            <li class="no-sub">
                <a href="{{route('recibos')}}">
                    <svg stroke="currentColor" stroke-width="1.5">
                        <use xlink:href="../assets/svg/_sprite.svg#document"></use>
                    </svg>
                    Recibos
                </a>
            </li>

            @if(session('role') == 'admin')
                <li class="no-sub">
                    <a href="{{route('reportes')}}">
                        <svg stroke="currentColor" stroke-width="1.5">
                            <use xlink:href="../assets/svg/_sprite.svg#chart"></use>
                        </svg>
                        Reportes
                    </a>
                </li>
            @endif
            
        </ul>
    </div>

    <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
    </div>

</nav>
<!-- Menu Navigation ends -->
