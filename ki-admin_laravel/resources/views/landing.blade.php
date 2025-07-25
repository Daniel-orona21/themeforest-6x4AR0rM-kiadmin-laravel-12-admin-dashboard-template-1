
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template"
          name="description">
    <meta content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app"
          name="keywords">
    <meta content="la-themes" name="author">

    <link rel="shortcut icon" href="{{('../assets/images/logo/favicon.png')}}" type="image/x-icon">
    <title>Landing | ki-admin - Premium Admin Template</title>

</head>

@include('layout.css')

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

@vite(['public/assets/scss/style.scss'])

<body class="bg-white landing-page">
<!-- Landing page start -->
<div class="app-wrapper flex-column">

    <!-- cursor  -->
    <div class="circle-cursor">
    </div>

    <!-- cursor -->

    <div class="landing-wrapper">
        <!-- Header start -->
        <div class="navbar navbar-expand-lg sticky-top landing-navbar px-3 position-fixed ">
            <div class="landing-navbar-container container-fluid">
                <a class="navbar-brand logo" href="#home">
                    <img alt="#" src="{{asset('../assets/images/logo/logo1.png')}}" class="w-200">
                </a>

                <button aria-controls="landing_nav" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler"
                        data-bs-target="#landing_nav" data-bs-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="landing_nav">

                    <ul class="navbar-nav flex-grow-1 justify-content-center">

                        <li class="nav-item">
                            <a class="nav-link active" href="#Demo">Demo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Cards">Cards</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Features">Features</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                               href="https://phpstack-1384472-5121645.cloudwaysapps.com/document/laravel/ki-admin/index.html"
                               target="_blank">Document</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Pricing">Pricing</a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-white" href="https://themeforest.net/user/la-themes" target="_blank">Buy
                            Now</a>
                        <a class="btn btn-outline-white ms-2" href="https://forms.gle/q7wFQQRtS2fLDZWbA"
                           target="_blank">Hire Us</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header end -->



        <section class="landing-section" id="home">
            <div class="container-fluid ">
                <ul class="home-bg-icon">
                    <li>
                        <img src="{{asset('../assets/images/landing/star-bg.png')}}" alt="" class="floating-img">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/arrow-bg.png')}}" alt="" class="floating-img">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/circle.png')}}" alt="" class="rounded-animation">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/circle.png')}}" alt="" class="rounded-animation">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/arrow-bg.png')}}" alt="" class="floating-img">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/star-bg.png')}}" alt="" class="rounded-animation">
                    </li>
                    <li>
                        <img src="{{asset('../assets/images/landing/arrow-bg.png')}}" alt="" class="floating-img">
                    </li>
                </ul>
                <div class="row landing-content">
                    <div class="col-xxl-8 offset-xxl-2 text-center position-relative">
                        <div class="landing-heading">

                            <h1>Your Ultimate Admin <br> Solution for
                                <span class="highlight-text" id="highlight-text">Management</span>
                            </h1>
                            <p>
                                Unlock premium features, advanced analytics, and priority support.
                                Subscribe today and take full control of your admin dashboard.
                            </p>
                        </div>

                        <div class="d-flex gap-3 justify-content-center my-5">

                            <a class="btn btn-danger f-s-16 px-4 py-2 text-white" href="{{route('index')}}"
                               role="button"
                               target="_blank">Check Now</a>
                            <a class="btn btn-light-white px-4 py-2 f-s-16" href="https://phpstack-1384472-5121645.cloudwaysapps.com/document/laravel/ki-admin/index.html"
                               role="button"
                               target="_blank">Document</a>
                        </div>

                    </div>

                    <div class="col-12 text-center position-relative">
                        <img src="{{asset('../assets/images/landing/home-banner.png')}}" alt="banner" class="img-fluid main-banner-img">

                        <div class="left-side-banner">
                            <img src="{{asset('../assets/images/landing/left-banner.gif')}}" alt="banner" class="img-fluid">
                        </div>

                        <div class="right-side-banner">
                            <img src="{{asset('../assets/images/landing/right-banner.gif')}}" alt="banner" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <section class="p-0 overflow-visible">
        <div class="container p-0">
            <div class="language-box">
                <div class="language-box-item">
                    <a href="{{route('index')}}" class="primary-box bg-primary h-60 w-60 d-flex-center b-r-50"
                       data-bs-toggle="tooltip" data-bs-custom-class="custom-primary" data-bs-html="true"
                       data-bs-original-title="Laravel">
                        <img src="{{asset('../assets/images/landing/logo/2logo1.png')}}" class="w-35" alt="lang">
                    </a>
                </div>
                <div class="language-box-item">
                    <a href="https://www.figma.com/design/kddmeMApQ3vBq6iQBgF7pP/Ki-admin-figma?node-id=0-1&p=f&t=ZQjbMYTVjrYVwBpg-0" class="danger-box bg-danger h-60 w-60 d-flex-center b-r-50" data-bs-toggle="tooltip"
                       data-bs-custom-class="custom-dark" data-bs-html="true" data-bs-original-title="Figma" >
                        <img src="{{asset('../assets/images/landing/logo/22.png')}}" class="w-20" alt="lang">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Demos section start -->
    <section class="demos-section section-lg-space-x" id="Demo">
        <div class="container">

            <div class="row">
                <div class="col-xl-8">
                    <div class="landing-title">
                        <span class="badge title-badge mb-3"><i
                                class="ph-fill  ph-seal-question f-s-14 align-text-bottom"></i> FAQ</span>
                        <h2>150 <span class="highlight-title"> pages</span></h2>
                        <p>All pages created with unlimited features that will reduce the cost, efforts and your
                            time.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3">
                    <div class="demos-tab-section ">

                        <ul class="nav nav-tabs app-tabs-dark" id="v-bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button aria-controls="dashboard-tab-pane" aria-selected="true" class="nav-link active"
                                        data-bs-target="#dashboard-tab-pane" data-bs-toggle="tab" id="dashboard-tab"
                                        role="tab"
                                        type="button">
                                    <i class="ph ph-house pe-2 ps-1"></i> Dashboard
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="apps-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#apps-tab-pane"
                                        data-bs-toggle="tab" id="apps-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-stack pe-2 ps-1"></i> Apps
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="ui-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#ui-tab-pane"
                                        data-bs-toggle="tab"
                                        id="ui-tab" role="tab" tabindex="-1" type="button">
                                    <i class="ph ph-briefcase pe-2 ps-1"></i> UI Kits
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="advance-ui-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#advance-ui-tab-pane" data-bs-toggle="tab" id="advance-ui-tab"
                                        role="tab"
                                        tabindex="-1" type="button">
                                    <i class="ph ph-briefcase-metal pe-2 ps-1"></i> Advance UI
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="icons-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#icons-tab-pane"
                                        data-bs-toggle="tab" id="icons-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-shapes pe-2 ps-1"></i> Icons
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="table-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#table-tab-pane"
                                        data-bs-toggle="tab" id="table-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-table pe-2 ps-1"></i> Tables
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="forms-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#forms-tab-pane"
                                        data-bs-toggle="tab" id="forms-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-cardholder pe-2 ps-1"></i> Forms
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="ready-touse-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#ready-touse-tab-pane" data-bs-toggle="tab" id="ready-touse-tab"
                                        role="tab"
                                        tabindex="-1" type="button">
                                    <i class="ph ph-hand-heart pe-2 ps-1"></i> Ready To Use
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="auth-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#auth-tab-pane"
                                        data-bs-toggle="tab" id="auth-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-notebook pe-2 ps-1"></i> Auth Pages
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="error-tab-pane" aria-selected="false" class="nav-link"
                                        data-bs-target="#error-tab-pane"
                                        data-bs-toggle="tab" id="error-tab" role="tab" tabindex="-1"
                                        type="button">
                                    <i class="ph ph-warning-octagon pe-2 ps-1"></i> Error Pages
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9">

                    <div class="tab-content mt-3 pe-sm-5 pe-0">
                        <!-- Dashboard tab start -->
                        <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img"
                                                 class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/ecommerce-dashboard.jpg')}}">
                                            <div class="demo-box">
                                                <h4 class="m-0">Ecommerce</h4>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('index')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card demo-card">
                                        <div class="card-body">

                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/project-dashboard.jpg')}}">
                                            <div class="demo-box">
                                                <h4 class="m-0">Project</h4>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('project_dashboard')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard tab end -->

                        <!--  Apps tab start -->
                        <div class="tab-pane fade" id="apps-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/calender.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Calender</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('calendar')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/profile.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Profile</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('profile')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/team.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Team</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('team')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/chat.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Chat</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('chat')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/email.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Email</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('email')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/ecommerce.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Ecommerce</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('product')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/to-do.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Todo</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('to_do')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/file-manager.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">File manager</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('file_manager')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/blog.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Blog</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('blog')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Apps tab end -->

                        <!--UI Kits tab  -->
                        <div class="tab-pane fade" id="ui-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">

                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/alert.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Alert</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('alert')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/badges.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Badges</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('badges')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/button.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Buttons</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('buttons')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/dropdown.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Dropdown</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('dropdown')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/avatar.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Avatar</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('avatar')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/accordions.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Accordions</h6>
                                                <a class="btn btn-primary  icon-btn b-r-22" href="{{route('accordions')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/progress.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Progress</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('progress')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/notification.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Notifications</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('notifications')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--UI Kits end  -->

                        <!--Advance UI tab  -->
                        <div class="tab-pane fade" id="advance-ui-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/modal.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Modals</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('modals')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/sweet-alert.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Sweetalert</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('sweetalert')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/animation.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Animation</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('animation')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/video-embaded.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Video embaded</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('video_embed')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/tour.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Tour</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('tour')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/slider.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Slider</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('slick_slider')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/rating.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Rating</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('ratings')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/count-down.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Count Down</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('count_down')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Advance UI end  -->

                        <!-- Icons tab start -->
                        <div class="tab-pane fade" id="icons-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">

                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/fontawesome.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Fontawesome Icons</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('fontawesome')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/flag.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Flag Icons</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('flag_icons')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/animated-icon.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Animated Icons</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('animated_icon')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/weather-icon.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Whether Icons</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('weather_icon')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Icons tab end -->

                        <!-- Table tab start -->
                        <div class="tab-pane fade" id="table-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/basic-table.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Basic Table</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('basic_table')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/data-table.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Data Table</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('data_table')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/list-js.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">List Js</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('list_table')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/advance-table.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Advance Table</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('advance_table')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table tab end -->

                        <!-- form tab start -->
                        <div class="tab-pane fade" id="forms-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/base-input.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Basic input</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('base_inputs')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/form-validation.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Form Validation</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('form_validation')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/checkbox.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Checkbox & Radio</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('checkbox_radio')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/input-mask.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Input Mask</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('input_masks')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/floating-label.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Floating Labels</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('floating_labels')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/select.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Select</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('select')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/range-slider.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Range Slider</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('range_slider')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/clip-board.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Clipboard</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('clipboard')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/file-upload.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">File Upload</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('file_upload')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/duel-list-box.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Dual Listbox</h6>
                                                <a class="btn btn-danger icon-btn b-r-22" href="{{route('dual_list_boxes')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/default-form.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Default Forms</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('default_forms')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- form tab end -->

                        <!-- Ready to use tab start -->
                        <div class="tab-pane fade" id="ready-touse-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">

                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/form-wizard.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Form Wizards</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('form_wizards')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/form-wizard-1.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Form Wizards 1</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('form_wizard_1')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/form-wizard-2.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Form Wizards 2</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('form_wizard_2')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/ready-to-use-form.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Ready To Use Form</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('ready_to_use_form')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/ready-to-use-table.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Ready To Use table</h6>
                                                <a class="btn btn-primary icon-btn b-r-22"
                                                   href="{{route('ready_to_use_table')}}" role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ready to use tab end -->

                        <!-- Auth page tab start -->
                        <div class="tab-pane fade" id="auth-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-1.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Sign In</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('sign_in')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-2.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Sign In With Bg image</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('sign_in_1')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-3.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Sign-up</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('sign_up')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-4.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Sign Up With Bgimage</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('sign_up_1')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-5.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Password Create</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('password_create')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-6.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Password reset</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('password_reset')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-7.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Lock Screen</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('lock_screen')}}"
                                                   role="button"
                                                   target="_blank">

                                                    <i class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/auth-8.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Tow Step Verification</h6>
                                                <a class="btn btn-primary icon-btn b-r-22"
                                                   href="{{route('two_step_verification')}}" role="button"
                                                   target="_blank">

                                                    <i
                                                        class="ph-bold  ph-caret-right"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Auth page tab end -->

                        <!-- Error tab start -->
                        <div class="tab-pane fade" id="error-tab-pane" role="tabpanel" tabindex="0">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">

                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/error-400.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Bad Request</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('error_400')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/error-403.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Forbidden</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('error_403')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/error-404.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Not Found</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('error_404')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/error-500.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Internal Server</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('error_500')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card demo-card">
                                        <div class="card-body">
                                            <img alt="demo-img" class="img-fluid b-r-8"
                                                 src="{{asset('../assets/images/landing/error-503.jpg')}}">
                                            <div class="demo-box">
                                                <h6 class="m-0 f-w-500 f-s-18">Service Unavailable</h6>
                                                <a class="btn btn-primary icon-btn b-r-22" href="{{route('error_503')}}"
                                                   role="button"
                                                   target="_blank">
                                                    <i
                                                        class="ph-bold  ph-caret-right f-s-18 f-w-900"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Error tab end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Demos section end  -->

    <!-- Features section start -->
    <section class="features-section" id="Features">
        <div class="container-fluid">
            <div class=" features-section-content section-lg-space-x">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="landing-title landing-title-light text-md-center">
                            <span class="badge title-badge mb-3"><i
                                    class="ph-fill  ph-squares-four f-s-14 align-text-bottom"></i> features</span>
                            <h2> Core <span class="highlight-title">features</span></h2>
                            <p>Admin features, developers can easily customize the appearance and behavior of their
                                applications, ensuring a consistent and visually appealing experience across different
                                devices and screen sizes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="features-box-list">
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/0logo1.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/02.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/03.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/04.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/05.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/06.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/07.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/08.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/09.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/10.png')}}">
                            </li>


                        </ul>

                        <ul class="features-box-list">
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/1logo1.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/12.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/13.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/14.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/15.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/16.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/17.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/18.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/19.png')}}">
                            </li>
                            <li class="d-flex-center">
                                <img alt="features-icon" class="img-fluid" src="{{asset('../assets/images/landing/logo/20.png')}}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->

    <!-- Faq section start -->
    <section class="faq-section section-lg-space-x">
        <div class="container">

            <div class="row">
                <div class="col-xl-8">
                    <div class="landing-title">
                        <span class="badge title-badge mb-3"><i
                                class="ph-fill  ph-seal-question f-s-14 align-text-bottom"></i> FAQ</span>
                        <h2>Inquired <span class="highlight-title"> Queries</span></h2>
                        <p>After reading the instructions, I had a few inquired queries about the process
                            and decided to reach out
                            to customer support for clarification.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 ">
                    <div class="row g-3">
                        <div class="col-lg-12 col-sm-6">
                            <div class="card card-primary ">
                                <div class="card-body bg-card-box">
                                    <div class="bg-card-img">
                                        <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h2>Digitize Your Documents</h2>
                                        <a class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 rounded-circle"
                                           href="https://phpstack-1384472-5121645.cloudwaysapps.com/document/laravel/ki-admin/index.html"
                                           role="button"
                                           target="_blank"><i
                                                class="ph-bold  ph-arrow-up-right text-dark f-s-18"></i></a>
                                    </div>
                                    <div>
                                        <p class="f-s-18">Efficiently Arranged and Current</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body bg-card-box">

                                    <div>
                                         <span class="bg-light-primary h-60 w-60 d-flex-center b-r-6 mb-3">
                                            <i class="ph-bold ph-headphones f-s-28"></i>
                                        </span>

                                        <h3 class="text-primary">Dedicated Support</h3>
                                        <p class="f-s-18">Require assistance? Send us a ticket. We're here to help!</p>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary" href="mailto:teqlathemes@gmail.com." role="button"
                                           target="_blank">Get
                                            Support</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="landing-accordion">
                        <div class="accordion app-accordion accordion-flush accordion-light-dark app-accordion-plus"
                             id="nestingExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button aria-controls="faqSectionCollapse1" aria-expanded="true"
                                            class="accordion-button"
                                            data-bs-target="#faqSectionCollapse1" data-bs-toggle="collapse"
                                            type="button">
                                        <i class="ph-fill  ph-seal-question f-s-18 align-text-bottom me-2"></i> What is
                                        the role of an admin??
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show" data-bs-parent="#nestingExample"
                                     id="faqSectionCollapse1">
                                    <div class="accordion-body">
                                        <p>Admins are responsible for managing and overseeing the smooth operation of a
                                            system, platform,
                                            or organization.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button aria-controls="faqSectionCollapse2" aria-expanded="false"
                                            class="accordion-button collapsed"
                                            data-bs-target="#faqSectionCollapse2" data-bs-toggle="collapse"
                                            type="button">
                                        <i class="ph-fill  ph-seal-question f-s-18 align-text-bottom me-2"></i> How do I
                                        add or remove users?
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" data-bs-parent="#nestingExample"
                                     id="faqSectionCollapse2">
                                    <div class="accordion-body">
                                        <p>
                                            Depending on the system, user management can usually be done through the
                                            admin dashboard. Look
                                            for the <strong>"User Management"</strong> or <strong>"Admin
                                                Settings"</strong> section, where
                                            you can add or remove users and
                                            assign roles.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button aria-expanded="false" class="accordion-button collapsed"
                                            data-bs-target="#faqSectionCollapse3"
                                            data-bs-toggle="collapse" type="button">
                                        <i class="ph-fill  ph-seal-question f-s-18 align-text-bottom me-2"></i> What
                                        security measures should I implement?
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" data-bs-parent="#nestingExample"
                                     id="faqSectionCollapse3">
                                    <div class="accordion-body">
                                        <p>
                                            Admins should prioritize security by enforcing strong password policies,
                                            implementing two-factor
                                            authentication, regularly updating software, and monitoring system logs for
                                            any suspicious
                                            activities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button aria-expanded="false" class="accordion-button collapsed"
                                            data-bs-target="#faqSectionCollapse4"
                                            data-bs-toggle="collapse" type="button">
                                        <i class="ph-fill  ph-seal-question f-s-18 align-text-bottom me-2"></i> How can
                                        I troubleshoot common issues?
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" data-bs-parent="#nestingExample"
                                     id="faqSectionCollapse4">
                                    <div class="accordion-body">
                                        <p>
                                            Document and follow a systematic approach to troubleshooting. Check error
                                            logs, consult
                                            documentation, and involve relevant stakeholders if needed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button aria-expanded="false" class="accordion-button collapsed"
                                            data-bs-target="#faqSectionCollapse5"
                                            data-bs-toggle="collapse" type="button">
                                        <i class="ph-fill  ph-seal-question f-s-18 align-text-bottom me-2"></i> How do I
                                        handle user access permissions?
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" data-bs-parent="#nestingExample"
                                     id="faqSectionCollapse5">
                                    <div class="accordion-body">
                                        <p>
                                            Website design projects can vary depending on their scale and
                                            complexity—making it hard to
                                            generalize about project timelines. Ideally, a typical website design
                                            project should take
                                            between 6 and 12 weeks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Faq section end -->

    <!-- Cards Sections start -->
    <section class="card-section" id="Cards">
        <div class="container-fluid">
            <div class="card-section-content section-lg-space-x">
                <div class="row align-items-center">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="landing-title text-md-center">
                            <span class="badge title-badge mb-3"><i
                                    class="ph-fill  ph-layout f-s-14 align-text-bottom"></i> Cards</span>
                            <h2> Sophisticated<span class="px-3 highlight-title">Cards</span></h2>
                            <p>Cards offer enhanced design flexibility and interactive capabilities, incorporating
                                dynamic elements
                                like animations, real-time updates, or embedded multimedia to provide a richer and more
                                engaging user experience in a concise card format.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-7 text-center position-relative">
                        <img alt="cards-img" class="img-fluid cards-img" src="{{asset('../assets/images/landing/cards-img.png')}}">
                    </div>
                    <div class="col-xl-5">
                        <ul class="card-details-list px-sm-4 px-0">
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-credit-card"></i>
                                </span>
                                200+ Cards Collection
                            </li>
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-diamonds-four"></i>
                                </span>
                                Basic Components Included
                            </li>
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-gear"></i>
                                </span>
                                Customization and Personalization
                            </li>
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-device-tablet"></i>
                                </span>
                                Responsive Card Design
                            </li>
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-gear-fine"></i>
                                </span>
                                Advanced Functionality
                            </li>
                            <li>
                                <span class="bg-light-primary h-45 w-45 d-flex-center b-r-10 b-1-primary flex-shrink-0">
                                   <i class="ph-fill  ph-palette"></i>
                                </span>
                                Styleguide Included
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cards Sections end  -->

    <!-- Element section start  -->
    <section class="element-section section-lg-space-x">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="landing-title">
                        <span class="badge title-badge mb-3"><i
                                class="ph-fill  ph-briefcase f-s-14 align-text-bottom"></i> UI Elements</span>
                        <h2>Elements <span class="highlight-title"> Of Ki-Admin</span></h2>
                        <p>offer a responsive and user-friendly interface, streamlining the design and development of
                            web applications by providing a robust set of pre-built components and templates.</p>
                    </div>
                </div>
            </div>


            <div class="row gx-sm-5 gy-sm-4 g-2">
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-playstation-circle text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">Buttons</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Apply Custom button styles to
                                        forms, dialogs, and various elements, featuring support for multiple sizes and
                                        states.</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('buttons')}}" role="button"
                                       target="_blank">View Buttons
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-cards text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">Cards</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Create stylish cards with Admin
                                        Element for organized content presentation and a sleek user interface.</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('cards')}}" role="button"
                                       target="_blank">View Cards
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-list-details text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">List</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Easily design lists with Admin
                                        Element intuitive elements for structured content display, enhancing user</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('list')}}" role="button"
                                       target="_blank">View List
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-alert-circle text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">Alerts</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Create alerts using Admin
                                        Elements intuitive elements to effectively communicate messages.</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('alert')}}" role="button"
                                       target="_blank">View Alerts
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-cooker text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">Accordions</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Create collapsible accordion in
                                        Admin for organized content presentation, optimizing user interaction.</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('accordions')}}" role="button"
                                       target="_blank">View Accordions
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="element-card ">
                                <div class="element-card-img">
                                    <img src="{{asset ('../assets/images/landing/card-image.png')}}" alt="">
                                </div>
                                <div class="element-content">
                                        <span class="btn btn-white icon-btn flex-shrink-0 w-45 h-45 b-r-8">
                                            <i class="ti ti-circle-chevron-down text-dark f-s-20"></i>
                                        </span>
                                    <h3 class="mt-3">Dropdown</h3>

                                </div>
                                <div>
                                    <p class="f-s-16 txt-ellipsis-2 text-white-800 mb-3">Create dropdown using Admin
                                        Elements for enhanced user interaction and intuitive navigation.</p>
                                    <a class="link-btn btn btn-light-white" href="{{route('buttons')}}" role="button"
                                       target="_blank">View Dropdown
                                        <i class="ph-bold  ph-caret-right f-s-16 ali"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Element section end  -->

    <!-- Dark Mode section -->
    <section class="dark-section">
        <div class="container-fluid">
            <div class=" dark-section-content section-lg-space-x">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 z-1">
                        <div class="landing-title landing-title-light text-md-center">
                            <span class="badge title-badge mb-3"><i
                                    class="ph-fill  ph-squares-four f-s-14 align-text-bottom"></i> Dark Layout</span>
                            <h2>Discover Our <span class="highlight-title"> Dark Layout</span></h2>
                            <p class="text-light">Embrace the elegance of the dark layout, where simplicity meets
                                sophistication. <br> Navigate effortlessly through your admin tasks with style.</p>
                            <button class="btn btn-lg btn-white mt-3 px-4 py-2" id="darkDemoBtn" type="button">Check Now<i
                                    class="ti ti-chevrons-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dark Mode section -->

    <!-- Purchase Plans section start  -->
    <section class="plans-section" id="Pricing" >
        <div class="container">

            <div class="card-section-content section-lg-space-x">

                <div class="row">
                    <div class="col-xl-8">
                        <div class="landing-title">
                            <span class="badge title-badge mb-3"><i
                                    class="ph-fill  ph-layout f-s-14 align-text-bottom"></i> Cards</span>
                            <h2>Purchase <span class="highlight-title">Plans</span></h2>
                            <p>Include information on how users can navigate your platform, select a plan, and complete
                                the transaction.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-7 col-xl-8">
                        <div class="card pricing-cards equal-card mb-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-xl-6">
                                        <div>
                                            <img alt="img" class="w-120" src="{{asset('../assets/images/landing/wallet.png')}}">
                                            <div>
                                                <p class="badge bg-primary f-s-16 mt-3">Basic Plans</p>
                                                <h1 class="text-primary f-w-700 mt-3">$14.00</h1>
                                                <p class="text-secondary  txt-ellipsis-3 f-w-500 f-s-16"> Essential
                                                    features at the best
                                                    value. Get started today with our budget-friendly pricing! </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-xl-6 ">
                                        <div class="pricing-details">
                                            <div class="price-title">
                                                <h3 class="text-dark f-w-600 txt-ellipsis-1">Basic Plans </h3>
                                                <ul class="pricing-list-menu">
                                                    <li class="pricing-listitem"><i
                                                            class="ph-bold  ph-check text-success me-2"></i>6 Month
                                                        support
                                                    </li>
                                                    <li class="pricing-listitem"><i
                                                            class="ph-bold  ph-check text-success me-2"></i>Single end
                                                        product use
                                                    </li>
                                                    <li class="pricing-listitem"><i
                                                            class="ph-bold  ph-check text-success me-2"></i>Future
                                                        upgrades
                                                        included
                                                    </li>
                                                    <li class="pricing-listitem"><i
                                                            class="ph-bold  ph-check text-success me-2"></i>Free for use
                                                        in
                                                        end products
                                                    </li>
                                                </ul>
                                                <div class="text-center price-btn">
                                                    <a class="btn btn-lg btn-primary"
                                                       href="https://themeforest.net/user/la-themes"
                                                       target="_blank">Buy
                                                        Plans</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-xl-4">
                        <div class="card pricing-cards active mb-0">
                            <div class="card-body p-0">
                                <div class="pricing-details">
                                    <div class="price-title">
                                        <p class="text-white-600">Business Plans</p>
                                        <h2>$499.00</h2>
                                        <ul class="pricing-list-menu">
                                            <li class="pricing-listitem text-white-800"><i
                                                    class="ph-bold  ph-check text-white me-2"></i>6 Month support
                                            </li>
                                            <li class="pricing-listitem text-white-800"><i
                                                    class="ph-bold  ph-check text-white me-2"></i>Single end product use
                                            </li>
                                            <li class="pricing-listitem text-white-800"><i
                                                    class="ph-bold  ph-check text-white me-2"></i>Future upgrades
                                                included
                                            </li>
                                            <li class="pricing-listitem text-white-800"><i
                                                    class="ph-bold  ph-check text-white me-2"></i>Free for use in end
                                                products
                                            </li>
                                        </ul>
                                        <div class="text-center price-btn">
                                            <a class="btn btn-lg btn-light-white"
                                               href="https://themeforest.net/user/la-themes"
                                               target="_blank">Buy
                                                Plans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Purchase Plans section end  -->

    <!-- Customization  options section start -->
    <section class="options-section section-lg-space-x">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="landing-title text-md-center">
                        <span class="badge title-badge mb-3"><i class="ph-fill  ph-gear f-s-14 align-text-bottom"></i> Customization</span>
                        <h2><span class="highlight-title">Customization</span> and preview</h2>
                        <p>Allow users to personalize settings or design elements in real-time, providing
                            an instant preview of
                            the changes before finalizing, ensuring a seamless and tailored experience</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card  sidebar-option-card">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="mb-5 f-w-600">Sidebar Customization Made Simple</h2>
                                <img src="{{asset('../assets/images/landing/sidebar.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-5">
                    <div class="card equal-card color-hint-card">
                        <div class="card-body">
                            <h3 class="text-primary text-center">Perfect Your Style with Color Variants!</h3>
                            <img src="{{asset('../assets/images/landing/coour-theme.png')}}" alt="" class="img-fluid">
                            <div class="text-center">
                                <a href="https://themeforest.net/user/la-themes" class="btn btn-primary" href="">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card layout-option-card">
                        <div class="card-body text-center">
                            <h3 class="text-dark mb-3">One-Click and change your <span
                                    class="text-primary"> Layout.</span></h3>
                            <img src="{{asset('../assets/images/landing/layout.png')}}" alt="option-img" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 ">
                    <div class="card equal-card layout-option-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('../assets/images/landing/typography.png')}}" alt="option-img" class="img-fluid ">
                            </div>
                            <div class="p-3 text-center">
                                <h4 class="text-primary f-w-600">Verified Our Typography</h4>
                                <p class="f-s-16 text-dark mt-2">Experience perfectly crafted fonts that enhance your
                                    design!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 ">
                    <div class="card equal-card speed-performance-card">
                        <div class="card-body">
                            <div class="speed-rocket">
                                <img src="{{asset('../assets/images/landing/speed-bg.png')}}" alt="img" class="w-200">
                            </div>
                            <div class="w-100 position-relative">
                                <div class="performance-content">
                                    <h5><span>A</span> Grade</h5>
                                    <div class="my-3">
                                        <h1 class="text-success f-w-700">97%</h1>
                                    </div>
                                    <p class="text-dark f-w-500 txt-ellipsis-1">page loading speed</p>
                                </div>
                                <div class="speedometer-img">
                                    <img src="{{asset('../assets/images/landing/speed-bg-2.png')}}" alt="img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Customization  options section end -->

    <!-- footer -->
    <section class="landing-footer section-lg-space-x">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                         <span class="bg-white h-90 w-90 d-flex-center b-r-50 m-auto footer-section-logo">
                           <img src="{{asset('../assets/images/logo/3.png')}}" alt="logo">
                         </span>

                        <h1>Your journey starts here</h1>
                        <p class="text-white-800 txt-ellipsis-3">
                            Purchase The Ki-Admin & Craft Your Site Super Faster And powerful. Discover the Ki-Admin
                            Admin Theme. If you enjoy our template, please take a moment to rate us</p>
                        <div class="footer-btn">
                            <a class="btn btn-primary btn-lg" href="https://themeforest.net/user/la-themes"
                               target="_blank">Buy Now</a>
                            <a class="btn btn-danger btn-lg" href="mailto:teqlathemes@gmail.com."
                               target="_blank">Need Help ?</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- footer -->
</div>
<!-- Landing page end -->


<!-- tap on top -->
<div class="go-top">
    <span class="progress-value">
      <i class="ti ti-arrow-up"></i>
    </span>
</div>


<!-- latest jquery-->

<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- phosphor js -->
<script src="{{asset('assets/vendor/phosphor/phosphor.js')}}"></script>

<!--js-->
<script src="{{asset('assets/js/landing.js')}}"></script>

</body>

</html>
