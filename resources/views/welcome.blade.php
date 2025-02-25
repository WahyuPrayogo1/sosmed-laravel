<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 07:41:54 GMT -->

<head>
    <title>Curhat Bang 😮</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="curhatBang.com">
    <meta name="description" content="Curhatbang">
    <meta name="keywords" content="Tempat curhat">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/dist/flatpickr.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css" />

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- =======================
Header START -->
    <header class="navbar-light fixed-top header-static bg-mode">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                </a>
                <!-- Logo END -->


                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <!-- Nav Search START -->
                    <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
                        <div class="nav-item w-100">
                            <form class="rounded position-relative">
                                <input class="form-control ps-5 bg-light" type="search" placeholder="Search..."
                                    aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                                    type="submit"><i class="bi bi-search fs-5"> </i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->

                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item">
                            <a class="nav-link" href="my-profile-connections.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="my-profile-connections.html">Video</a>
                        </li>

                    </ul>

                </div>

                <!-- Main navbar END -->
                @if (Route::has('login'))
                    @auth
                        <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                            <li class="nav-item ms-2">
                                <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
                                    <i class="bi bi-chat-left-text-fill fs-6"> </i>
                                </a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
                                    <i class="bi bi-gear-fill fs-6"> </i>
                                </a>
                            </li>
                            <li class="nav-item dropdown ms-2">
                                <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-auto-close="outside">
                                    <span class="badge-notif animation-blink"></span>
                                    <i class="bi bi-bell-fill fs-6"> </i>
                                </a>
                                <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
                                    aria-labelledby="notifDropdown">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Notifications <span
                                                    class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span>
                                            </h6>
                                            <a class="small" href="#">Clear all</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush list-unstyled p-2">
                                                <!-- Notif item -->
                                                <li>
                                                    <div
                                                        class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                                                        <div class="avatar text-center d-none d-sm-inline-block">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/01.jpg" alt="">
                                                        </div>
                                                        <div class="ms-sm-3">
                                                            <div class=" d-flex">
                                                                <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend
                                                                    request.</p>
                                                                <p class="small ms-3 text-nowrap">Just now</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <button class="btn btn-sm py-1 btn-primary me-2">Accept
                                                                </button>
                                                                <button class="btn btn-sm py-1 btn-danger-soft">Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Notif item -->
                                                <li>
                                                    <div
                                                        class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                                                        <div class="avatar text-center d-none d-sm-inline-block">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/02.jpg" alt="">
                                                        </div>
                                                        <div class="ms-sm-3 d-flex">
                                                            <div>
                                                                <p class="small mb-2">Wish <b>Amanda Reed</b> a happy
                                                                    birthday
                                                                    (Nov 12)
                                                                </p>
                                                                <button class="btn btn-sm btn-outline-light py-1 me-2">Say
                                                                    happy birthday 🎂</button>
                                                            </div>
                                                            <p class="small ms-3">2min</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                                                        <div class="avatar text-center d-none d-sm-inline-block">
                                                            <div class="avatar-img rounded-circle bg-success"><span
                                                                    class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-sm-3">
                                                            <div class="d-flex">
                                                                <p class="small mb-2">Webestica has 15 like and 1 new
                                                                    activity
                                                                </p>
                                                                <p class="small ms-3">1hr</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                                                        <div class="avatar text-center d-none d-sm-inline-block">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/logo/12.svg" alt="">
                                                        </div>
                                                        <div class="ms-sm-3 d-flex">
                                                            <p class="small mb-2"><b>Bootstrap in the news:</b> The search
                                                                giant’s parent company, Alphabet, just joined an exclusive
                                                                club
                                                                of tech stocks.</p>
                                                            <p class="small ms-3">4hr</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="#" class="btn btn-sm btn-primary-soft">See all incoming
                                                activity</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Notification dropdown END -->

                            <li class="nav-item ms-2 dropdown">
                                <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button"
                                    data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="avatar-img rounded-2" src="assets/images/avatar/07.jpg" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
                                    aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3">
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Avatar -->
                                            <div class="avatar me-3">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                                    alt="avatar">
                                            </div>
                                            <div>
                                                <a class="h6 stretched-link" href="#">Lori Ferguson</a>
                                                <p class="small m-0">Web Developer</p>
                                            </div>
                                        </div>
                                        <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center"
                                            href="my-profile.html">View profile</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <!-- item-->
                                        <form method="POST" action="{{ route('logout') }}" style="display: none;"
                                            id="logout-form">
                                            @csrf
                                        </form>


                                        <a class="dropdown-item bg-danger-soft-hover" href="javascript:void(0);"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="bi bi-power fa-fw me-2"></i>Sign Out</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <!-- Dark mode switch START -->
                                    <li>
                                        <div class="modeswitch-wrap" id="darkModeSwitch">
                                            <div class="modeswitch-item">
                                                <div class="modeswitch-icon"></div>
                                            </div>
                                            <span>Dark mode</span>
                                        </div>
                                    </li>
                                    <!-- Dark mode switch END -->
                                </ul>
                            </li>
                            <!-- Profile START -->

                        </ul>
                    @else
                        <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                            <li class="nav-item">
                                <a class="btn btn-sm btn-primary-soft" href="{{route('login')}}">Masuk</a>
                            </li>
                            <div class="mx-2">

                            </div>
                            <li class="nav-item">
                                <a class="btn btn-sm btn-danger-soft" href="{{route('register')}}">Daftar</a>
                            </li>
                        </ul>
                    @endauth
                @endif
                <!-- Nav right START -->

                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- Container START -->
        <div class="container">
            <div class="row g-4">

                <!-- Sidenav START -->
                <div class="col-lg-3">

                    <!-- Advanced filter responsive toggler START -->
                    <div class="d-flex align-items-center d-lg-none">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
                            <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->

                    <!-- Navbar START-->
                    <nav class="navbar navbar-expand-lg mx-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            @auth
<!-- Offcanvas body -->
<div class="offcanvas-body d-block px-2 px-lg-0">
    <!-- Card START -->
    <div class="card overflow-hidden">
        <!-- Cover image -->
        <div class="h-50px"
            style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
        </div>
        <!-- Card body START -->
        <div class="card-body pt-0">
            <div class="text-center">
                <!-- Avatar -->
                <div class="avatar avatar-lg mt-n5 mb-3">
                    <a href="#!"><img
                            class="avatar-img rounded border border-white border-3"
                            src="{{ asset('assets/images/avatar/' . Auth::user()->avatar) }}" alt=""></a>
                </div>
                <!-- Info -->
                <h5 class="mb-0"> <a href="#!">{{ Auth::user()->name }}</a> </h5>
                <small>{{ Auth::user()->role }}</small>
                <p class="mt-3">I'd love to change the world, but they won’t give me the source code.</p>

                <!-- User stat START -->
                <div class="hstack gap-2 gap-xl-3 justify-content-center">
                    <div>
                        <h6 class="mb-0">256</h6>
                        <small>Post</small>
                    </div>
                    <div class="vr"></div>
                    <div>
                        <h6 class="mb-0">2.5K</h6>
                        <small>Followers</small>
                    </div>
                    <div class="vr"></div>
                    <div>
                        <h6 class="mb-0">365</h6>
                        <small>Following</small>
                    </div>
                </div>
                <!-- User stat END -->
            </div>

            <hr>

            <!-- Side Nav START -->
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                <li class="nav-item">
                    <a class="nav-link" href="my-profile.html"> <img
                            class="me-2 h-20px fa-fw"
                            src="assets/images/icon/home-outline-filled.svg"
                            alt=""><span>Status Saya </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my-profile-connections.html"> <img
                            class="me-2 h-20px fa-fw"
                            src="assets/images/icon/person-outline-filled.svg"
                            alt=""><span>Teman </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html"> <img class="me-2 h-20px fa-fw"
                            src="assets/images/icon/earth-outline-filled.svg"
                            alt=""><span>Berita Terkini </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notifications.html"> <img
                            class="me-2 h-20px fa-fw"
                            src="assets/images/icon/notification-outlined-filled.svg"
                            alt=""><span>Notifications </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.html"> <img
                            class="me-2 h-20px fa-fw"
                            src="assets/images/icon/cog-outline-filled.svg"
                            alt=""><span>Settings </span></a>
                </li>
            </ul>
            <!-- Side Nav END -->
        </div>
        <!-- Card body END -->
        <div class="card-footer text-center py-2">
            <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
        </div>
    </div>
    <!-- Card END -->

    <!-- Helper link START -->
    <ul class="nav small mt-4 justify-content-center lh-1">
        <li class="nav-item">
            <a class="nav-link" href="my-profile-about.html">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="settings.html">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank"
                href="https://support.webestica.com/login">Support </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="help.html">Help</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="privacy-and-terms.html">Privacy & terms</a>
        </li>
    </ul>
    <!-- Helper link END -->
    <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank"
            href="https://www.webestica.com/"> Webestica </a></p>
</div>
@endauth

                        </div>
                    </nav>
                    <!-- Navbar END-->
                </div>
                <!-- Sidenav END -->

                <!-- Main content START -->
                <div class="col-md-8 col-lg-6 vstack gap-4">
                    @auth
                    <!-- Story START -->
                    <div class="tiny-slider arrow-hover overflow-hidden">
                        <div class="tiny-slider-inner ms-n4" data-arrow="true" data-dots="true" data-loop="false"
                            data-autoplay="false" data-items-xl="4" data-items-lg="3" data-items-md="3"
                            data-items-sm="3" data-items-xs="2" data-gutter="12" data-edge="30">

                            <!-- Slider items -->
                            <div>
                                <!-- Card add story START -->
                                <div
                                    class="card border border-2 border-dashed h-150px shadow-none d-flex align-items-center justify-content-center text-center">
                                    <div>
                                        <a class="stretched-link btn btn-light rounded-circle icon-md"
                                            href="#!"><i class="fa-solid fa-plus"></i></a>
                                        <h6 class="mt-2 mb-0 small">Post a Story</h6>
                                    </div>
                                </div>
                                <!-- Card add story END -->
                            </div>

                            <!-- Slider items -->
                            <div>
                                <!-- Card START -->
                                <div class="card card-overlay-bottom border-0 position-relative h-150px"
                                    style="background-image:url(assets/images/post/1by1/02.jpg); background-position: center left; background-size: cover;">
                                    <div class="card-img-overlay d-flex align-items-center p-2">
                                        <div class="w-100 mt-auto">
                                            <!-- Name -->
                                            <a href="#!" class="stretched-link text-white small">Judy Nguyen</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>

                            <!-- Slider items -->
                            <div>
                                <!-- Card START -->
                                <div class="card card-overlay-bottom border-0 position-relative h-150px"
                                    style="background-image:url(assets/images/post/1by1/03.jpg); background-position: center left; background-size: cover;">
                                    <div class="card-img-overlay d-flex align-items-center p-2">
                                        <div class="w-100 mt-auto">
                                            <!-- Name -->
                                            <a href="#!" class="stretched-link text-white small">Samuel
                                                Bishop</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>

                            <!-- Slider items -->
                            <div>
                                <!-- Card START -->
                                <div class="card card-overlay-bottom border-0 position-relative h-150px"
                                    style="background-image:url(assets/images/post/1by1/04.jpg); background-position: center left; background-size: cover;">
                                    <div class="card-img-overlay d-flex align-items-center p-2">
                                        <div class="w-100 mt-auto">
                                            <!-- Name -->
                                            <a href="#!" class="stretched-link text-white small">Carolyn
                                                Ortiz</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>

                            <!-- Slider items -->
                            <div>
                                <!-- Card START -->
                                <div class="card card-overlay-bottom border-0 position-relative h-150px"
                                    style="background-image:url(assets/images/post/1by1/05.jpg); background-position: center left; background-size: cover;">
                                    <div class="card-img-overlay d-flex align-items-center p-2">
                                        <div class="w-100 mt-auto">
                                            <!-- Name -->
                                            <a href="#!" class="stretched-link text-white small">Amanda Reed</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>

                            <!-- Slider items -->
                            <div>
                                <!-- Card START -->
                                <div class="card card-overlay-bottom border-0 position-relative h-150px"
                                    style="background-image:url(assets/images/post/1by1/01.jpg); background-position: center left; background-size: cover;">
                                    <div class="card-img-overlay d-flex align-items-center p-2">
                                        <div class="w-100 mt-auto">
                                            <!-- Name -->
                                            <a href="#!" class="stretched-link text-white small">Lori Stevens</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                    </div>
                    @endauth
                    <!-- Story END -->

                    <!-- Share feed START -->
                    @auth
                    <div class="card card-body">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2">
                                <a href="#"> <img class="avatar-img rounded-circle"
                                        src="assets/images/avatar/03.jpg" alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                                <textarea class="form-control pe-4 border-0" rows="2" data-autoresize placeholder="Share your thoughts..."></textarea>
                            </form>
                        </div>
                        <!-- Share feed toolbar START -->
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                    data-bs-target="#feedActionPhoto"> <i
                                        class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                    data-bs-target="#feedActionVideo"> <i
                                        class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link bg-light py-1 px-2 mb-0" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateEvents"> <i
                                        class="bi bi-calendar2-event-fill text-danger pe-2"></i>Event </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateFeed"> <i
                                        class="bi bi-emoji-smile-fill text-warning pe-2"></i>Feeling /Activity</a>
                            </li>
                            <li class="nav-item dropdown ms-lg-auto">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#" id="feedActionShare"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                    <li><a class="dropdown-item" href="#"> <i
                                                class="bi bi-envelope fa-fw pe-2"></i>Create a poll</a></li>
                                    <li><a class="dropdown-item" href="#"> <i
                                                class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <i
                                                class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Share feed toolbar END -->
                    </div>
                    @endauth
                    <!-- Share feed END -->

                    <!-- Card feed item START -->
                    @foreach($postingan as $post)

                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-story me-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle"
                                                src="assets/images/avatar/04.jpg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <div class="nav nav-divider">
                                            <h6 class="nav-item card-title mb-0"> <a href="#!"> {{ $post->user->name }}
                                                </a></h6>
                                            <span class="nav-item small"> 2hr</span>
                                        </div>
                                        <p class="mb-0 small">Web Developer at Webestica</p>
                                    </div>
                                </div>
                                <!-- Card feed action dropdown START -->
                                <div class="dropdown">
                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2"
                                        id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card feed action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card feed action dropdown END -->
                            </div>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">
                        <p>{{ $post->body }}</p>
    <!-- Card img -->
    <img class="card-img" src="{{ Storage::url('postingans/' . $post->image) }}" alt="Post Image">

                            <!-- <img class="card-img" src="assets/images/post/3by2/01.jpg" alt="Post"> -->
                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" href="#!"> <i
                                            class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments
                                        (12)</a>
                                </li> -->
                                <!-- Card share action START -->
                                
                                <!-- Card share action END -->
                            </ul>
                            <!-- Feed react END -->

                            <!-- Add comment -->
                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs me-2">
                                    <a href="#!"> <img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/12.jpg" alt=""> </a>
                                </div>
                                <!-- Comment box  -->
                                <form class="w-100">
                                    <textarea data-autoresize class="form-control pe-4 bg-light" rows="1" placeholder="Add a comment..."></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    @endforeach
                    <!-- Card feed item END -->

                    <!-- Load more button START -->
                    <a href="#!" role="button" class="btn btn-loader btn-primary-soft"
                        data-bs-toggle="button" aria-pressed="true">
                        <span class="load-text"> Load more </span>
                        <div class="load-icon">
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </a>
                    <!-- Load more button END -->

                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-3">
                    <div class="row g-4">
                        <!-- Card follow START -->
                        @auth

                        <div class="col-sm-6 col-lg-12">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header pb-0 border-0">
                                    <h5 class="card-title mb-0">Who to follow</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#!"><img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/04.jpg" alt=""></a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Judy Nguyen </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto"
                                            href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-story">
                                            <a href="#!"> <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/05.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Amanda Reed </a>
                                            <p class="mb-0 small text-truncate">Web Developer</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto"
                                            href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/11.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Billy Vasquez </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary rounded-circle icon-md ms-auto" href="#"><i
                                                class="bi bi-person-check-fill"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/01.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Lori Ferguson </a>
                                            <p class="mb-0 small text-truncate">Web Developer at Webestica</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto"
                                            href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle"
                                                    src="assets/images/avatar/placeholder.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Carolyn Ortiz </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto"
                                            href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- View more button -->
                                    <div class="d-grid mt-3">
                                        <a class="btn btn-sm btn-primary-soft" href="#!">View more</a>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        @endauth
                        <!-- Card follow START -->

                        <!-- Card News START -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header pb-0 border-0">
                                    <h5 class="card-title mb-0">Today’s news</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Ten questions you should
                                                answer truthfully</a></h6>
                                        <small>2hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Five unbelievable facts about
                                                money</a></h6>
                                        <small>3hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Best Pinterest Boards for
                                                learning about business</a></h6>
                                        <small>4hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Skills that you can learn
                                                from business</a></h6>
                                        <small>6hr</small>
                                    </div>
                                    <!-- Load more comments -->
                                    <a href="#!" role="button"
                                        class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"
                                        data-bs-toggle="button" aria-pressed="true">
                                        <div class="spinner-dots me-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        View all latest news
                                    </a>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card News END -->
                    </div>
                </div>
                <!-- Right sidebar END -->

            </div> <!-- Row END -->
        </div>
        <!-- Container END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Main Chat START -->
    <div class="d-none d-lg-block">
        <!-- Button -->
        <a class="icon-md btn btn-primary position-fixed end-0 bottom-0 me-5 mb-5" data-bs-toggle="offcanvas"
            href="#offcanvasChat" role="button" aria-controls="offcanvasChat">
            <i class="bi bi-chat-left-text-fill"></i>
        </a>
        <!-- Chat sidebar START -->
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasChat">
            <!-- Offcanvas header -->
            <div class="offcanvas-header d-flex justify-content-between">
                <h5 class="offcanvas-title">Messaging</h5>
                <div class="d-flex">
                    <!-- New chat box open button -->
                    <a href="#" class="btn btn-secondary-soft-hover py-1 px-2">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <!-- Chat action START -->
                    <div class="dropdown">
                        <a href="#" class="btn btn-secondary-soft-hover py-1 px-2" id="chatAction"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <!-- Chat action menu -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatAction">
                            <li><a class="dropdown-item" href="#"> <i
                                        class="bi bi-check-square fa-fw pe-2"></i>Mark all as read</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>Chat
                                    setting </a></li>
                            <li><a class="dropdown-item" href="#"> <i
                                        class="bi bi-bell fa-fw pe-2"></i>Disable notifications</a></li>
                            <li><a class="dropdown-item" href="#"> <i
                                        class="bi bi-volume-up-fill fa-fw pe-2"></i>Message sounds</a></li>
                            <li><a class="dropdown-item" href="#"> <i
                                        class="bi bi-slash-circle fa-fw pe-2"></i>Block setting</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"> <i
                                        class="bi bi-people fa-fw pe-2"></i>Create a group chat</a></li>
                        </ul>
                    </div>
                    <!-- Chat action END -->

                    <!-- Close  -->
                    <a href="#" class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                </div>
            </div>
            <!-- Offcanvas body START -->
            <div class="offcanvas-body pt-0 custom-scrollbar">
                <!-- Search contact START -->
                <form class="rounded position-relative">
                    <input class="form-control ps-5 bg-light" type="search" placeholder="Search..."
                        aria-label="Search">
                    <button class="btn bg-transparent px-3 py-0 position-absolute top-50 start-0 translate-middle-y"
                        type="submit"><i class="bi bi-search fs-5"> </i></button>
                </form>
                <!-- Search contact END -->
                <ul class="list-unstyled">

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative toast-btn"
                        data-target="chatToast">
                        <!-- Avatar -->
                        <div class="avatar status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Frances Guerrero </a>
                            <div class="small text-secondary text-truncate">Frances sent a photo.</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> Just now </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative toast-btn"
                        data-target="chatToast2">
                        <!-- Avatar -->
                        <div class="avatar status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Lori Ferguson </a>
                            <div class="small text-secondary text-truncate">You missed a call form Carolyn🤙</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 1min </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar status-offline">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/placeholder.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Samuel Bishop </a>
                            <div class="small text-secondary text-truncate">Day sweetness why cordially 😊</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 2min </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Dennis Barrett </a>
                            <div class="small text-secondary text-truncate">Happy birthday🎂</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 10min </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar avatar-story status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Judy Nguyen </a>
                            <div class="small text-secondary text-truncate">Thank you!</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 2hrs </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Carolyn Ortiz </a>
                            <div class="small text-secondary text-truncate">Greetings from Webestica.</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 1 day </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="flex-shrink-0 avatar">
                            <ul class="avatar-group avatar-group-four">
                                <li class="avatar avatar-xxs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xxs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xxs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xxs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                        alt="avatar">
                                </li>
                            </ul>
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link text-truncate d-inline-block" href="#!">Frances,
                                Lori, Amanda, Lawson </a>
                            <div class="small text-secondary text-truncate">Btw are you looking for job change?</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 4 day </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar status-offline">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Bryan Knight </a>
                            <div class="small text-secondary text-truncate">if you are available to discuss🙄</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 6 day </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Louis Crawford </a>
                            <div class="small text-secondary text-truncate">🙌Congrats on your work anniversary!</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 1 day </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Jacqueline Miller </a>
                            <div class="small text-secondary text-truncate">No sorry, Thanks.</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 15, dec </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Amanda Reed </a>
                            <div class="small text-secondary text-truncate">Interested can share CV at.</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 18, dec </div>
                    </li>

                    <!-- Contact item -->
                    <li class="mt-3 hstack gap-3 align-items-center position-relative">
                        <!-- Avatar -->
                        <div class="avatar status-online">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg"
                                alt="">
                        </div>
                        <!-- Info -->
                        <div class="overflow-hidden">
                            <a class="h6 mb-0 stretched-link" href="#!">Larry Lawson </a>
                            <div class="small text-secondary text-truncate">Hope you're doing well and Safe.</div>
                        </div>
                        <!-- Chat time -->
                        <div class="small ms-auto text-nowrap"> 20, dec </div>
                    </li>
                    <!-- Button -->
                    <li class="mt-3 d-grid">
                        <a class="btn btn-primary-soft" href="messaging.html"> See all in messaging </a>
                    </li>

                </ul>
            </div>
            <!-- Offcanvas body END -->
        </div>
        <!-- Chat sidebar END -->

        <!-- Chat END -->

        <!-- Chat START -->
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container toast-chat d-flex gap-3 align-items-end">

                <!-- Chat toast START -->
                <div id="chatToast" class="toast mb-0 bg-mode" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-autohide="false">
                    <div class="toast-header bg-mode">
                        <!-- Top avatar and status START -->
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 mt-1">Frances Guerrero</h6>
                                    <div class="small text-secondary"><i
                                            class="fa-solid fa-circle text-success me-1"></i>Online</div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <!-- Call button -->
                                <div class="dropdown">
                                    <a class="btn btn-secondary-soft-hover py-1 px-2" href="#"
                                        id="chatcoversationDropdown" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false"><i
                                            class="bi bi-three-dots-vertical"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="chatcoversationDropdown">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-camera-video me-2 fw-icon"></i>Video call</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-telephone me-2 fw-icon"></i>Audio call</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-trash me-2 fw-icon"></i>Delete </a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-chat-square-text me-2 fw-icon"></i>Mark as unread</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-volume-up me-2 fw-icon"></i>Muted</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-archive me-2 fw-icon"></i>Archive</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-flag me-2 fw-icon"></i>Report</a></li>
                                    </ul>
                                </div>
                                <!-- Card action END -->
                                <a class="btn btn-secondary-soft-hover py-1 px-2" data-bs-toggle="collapse"
                                    href="#collapseChat" aria-expanded="false" aria-controls="collapseChat"><i
                                        class="bi bi-dash-lg"></i></a>
                                <button class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="toast"
                                    aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <!-- Top avatar and status END -->

                    </div>
                    <div class="toast-body collapse show" id="collapseChat">
                        <!-- Chat conversation START -->
                        <div class="chat-conversation-content custom-scrollbar h-200px">
                            <!-- Chat time -->
                            <div class="text-center small my-2">Jul 16, 2022, 06:15 am</div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">Applauded no
                                                discovery😊</div>
                                            <div class="small my-2">6:15 AM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message right -->
                            <div class="d-flex justify-content-end text-end mb-1">
                                <div class="w-100">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="bg-primary text-white p-2 px-3 rounded-2">With pleasure</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">Please find the
                                                attached</div>
                                            <!-- Files START -->
                                            <!-- Files END -->
                                            <div class="small my-2">12:16 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">How promotion
                                                excellent curiosity😮</div>
                                            <div class="small my-2">3:22 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message right -->
                            <div class="d-flex justify-content-end text-end mb-1">
                                <div class="w-100">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="bg-primary text-white p-2 px-3 rounded-2">And sir dare view.</div>
                                        <!-- Images -->
                                        <div class="d-flex my-2">
                                            <div class="small text-secondary">5:35 PM</div>
                                            <div class="small ms-2"><i class="fa-solid fa-check"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat time -->
                            <div class="text-center small my-2">2 New Messages</div>
                            <!-- Chat Typing -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-3 rounded-2">
                                                <div class="typing d-flex align-items-center">
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chat conversation END -->
                        <!-- Chat bottom START -->
                        <div class="mt-2">
                            <!-- Chat textarea -->
                            <textarea class="form-control mb-sm-0 mb-3" placeholder="Type a message" rows="1"></textarea>
                            <!-- Button -->
                            <div class="d-sm-flex align-items-end mt-2">
                                <button class="btn btn-sm btn-danger-soft me-2"><i
                                        class="fa-solid fa-face-smile fs-6"></i></button>
                                <button class="btn btn-sm btn-secondary-soft me-2"><i
                                        class="fa-solid fa-paperclip fs-6"></i></button>
                                <button class="btn btn-sm btn-success-soft me-2"> Gif </button>
                                <button class="btn btn-sm btn-primary ms-auto"> Send </button>
                            </div>
                        </div>
                        <!-- Chat bottom START -->
                    </div>
                </div>
                <!-- Chat toast END -->

                <!-- Chat toast 2 START -->
                <div id="chatToast2" class="toast mb-0 bg-mode" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-autohide="false">
                    <div class="toast-header bg-mode">
                        <!-- Top avatar and status START -->
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 mt-1">Lori Ferguson</h6>
                                    <div class="small text-secondary"><i
                                            class="fa-solid fa-circle text-success me-1"></i>Online</div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <!-- Call button -->
                                <div class="dropdown">
                                    <a class="btn btn-secondary-soft-hover py-1 px-2" href="#"
                                        id="chatcoversationDropdown2" role="button" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false"><i
                                            class="bi bi-three-dots-vertical"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="chatcoversationDropdown2">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-camera-video me-2 fw-icon"></i>Video call</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-telephone me-2 fw-icon"></i>Audio call</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-trash me-2 fw-icon"></i>Delete </a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-chat-square-text me-2 fw-icon"></i>Mark as unread</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-volume-up me-2 fw-icon"></i>Muted</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-archive me-2 fw-icon"></i>Archive</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-flag me-2 fw-icon"></i>Report</a></li>
                                    </ul>
                                </div>
                                <!-- Card action END -->
                                <a class="btn btn-secondary-soft-hover py-1 px-2" data-bs-toggle="collapse"
                                    href="#collapseChat2" role="button" aria-expanded="false"
                                    aria-controls="collapseChat2"><i class="bi bi-dash-lg"></i></a>
                                <button class="btn btn-secondary-soft-hover py-1 px-2" data-bs-dismiss="toast"
                                    aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <!-- Top avatar and status END -->

                    </div>
                    <div class="toast-body collapse show" id="collapseChat2">
                        <!-- Chat conversation START -->
                        <div class="chat-conversation-content custom-scrollbar h-200px">
                            <!-- Chat time -->
                            <div class="text-center small my-2">Jul 16, 2022, 06:15 am</div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">Applauded no
                                                discovery😊</div>
                                            <div class="small my-2">6:15 AM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message right -->
                            <div class="d-flex justify-content-end text-end mb-1">
                                <div class="w-100">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="bg-primary text-white p-2 px-3 rounded-2">With pleasure</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">Please find the
                                                attached</div>
                                            <!-- Files START -->
                                            <!-- Files END -->
                                            <div class="small my-2">12:16 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message left -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-2 px-3 rounded-2">How promotion
                                                excellent curiosity😮</div>
                                            <div class="small my-2">3:22 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat message right -->
                            <div class="d-flex justify-content-end text-end mb-1">
                                <div class="w-100">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="bg-primary text-white p-2 px-3 rounded-2">And sir dare view.</div>
                                        <!-- Images -->
                                        <div class="d-flex my-2">
                                            <div class="small text-secondary">5:35 PM</div>
                                            <div class="small ms-2"><i class="fa-solid fa-check"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat time -->
                            <div class="text-center small my-2">2 New Messages</div>
                            <!-- Chat Typing -->
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0 avatar avatar-xs me-2">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="w-100">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="bg-light text-secondary p-3 rounded-2">
                                                <div class="typing d-flex align-items-center">
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                    <div class="dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chat conversation END -->
                        <!-- Chat bottom START -->
                        <div class="mt-2">
                            <!-- Chat textarea -->
                            <textarea class="form-control mb-sm-0 mb-3" placeholder="Type a message" rows="1"></textarea>
                            <!-- Button -->
                            <div class="d-sm-flex align-items-end mt-2">
                                <button class="btn btn-sm btn-danger-soft me-2"><i
                                        class="fa-solid fa-face-smile fs-6"></i></button>
                                <button class="btn btn-sm btn-secondary-soft me-2"><i
                                        class="fa-solid fa-paperclip fs-6"></i></button>
                                <button class="btn btn-sm btn-success-soft me-2"> Gif </button>
                                <button class="btn btn-sm btn-primary ms-auto"> Send </button>
                            </div>
                        </div>
                        <!-- Chat bottom START -->
                    </div>
                </div>
                <!-- Chat toast 2 END -->

            </div>
        </div>
        <!-- Chat END -->

    </div>
    <!-- Main Chat END -->

    <!-- Modal create Feed START -->
    <div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="modalLabelCreateFeed"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelCreateFeed">Create post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->

                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Add Feed -->
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                alt="">
                        </div>
                        <!-- Feed box  -->
                        <form class="w-100">
                            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="4" placeholder="Share your thoughts..."
                                autofocus></textarea>
                        </form>
                    </div>
                    <!-- Feed rect START -->
                    <div class="hstack gap-2">
                        <a class="icon-md bg-success bg-opacity-10 text-success rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Photo"> <i
                                class="bi bi-image-fill"></i> </a>
                        <a class="icon-md bg-info bg-opacity-10 text-info rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Video"> <i
                                class="bi bi-camera-reels-fill"></i> </a>
                        <a class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Events"> <i
                                class="bi bi-calendar2-event-fill"></i> </a>
                        <a class="icon-md bg-warning bg-opacity-10 text-warning rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Feeling/Activity"> <i
                                class="bi bi-emoji-smile-fill"></i> </a>
                        <a class="icon-md bg-light text-secondary rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Check in"> <i
                                class="bi bi-geo-alt-fill"></i> </a>
                        <a class="icon-md bg-primary bg-opacity-10 text-primary rounded-circle" href="#"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tag people on top"> <i
                                class="bi bi-tag-fill"></i> </a>
                    </div>
                    <!-- Feed rect END -->
                </div>
                <!-- Modal feed body END -->

                <!-- Modal feed footer -->
                <div class="modal-footer row justify-content-between">
                    <!-- Select -->
                    <div class="col-lg-3">
                        <select class="form-select js-choice choice-select-text-none" data-position="top"
                            data-search-enabled="false">
                            <option value="PB">Public</option>
                            <option value="PV">Friends</option>
                            <option value="PV">Only me</option>
                            <option value="PV">Custom</option>
                        </select>
                        <!-- Button -->
                    </div>
                    <div class="col-lg-8 text-sm-end">
                        <button type="button" class="btn btn-danger-soft me-2"> <i
                                class="bi bi-camera-video-fill pe-1"></i> Live video</button>
                        <button type="button" class="btn btn-success-soft">Post</button>
                    </div>
                </div>
                <!-- Modal feed footer -->

            </div>
        </div>
    </div>
    <!-- Modal create feed END -->

    <!-- Modal create Feed photo START -->
    <div class="modal fade" id="feedActionPhoto" tabindex="-1" aria-labelledby="feedActionPhotoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="feedActionPhotoLabel">Add post photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->

                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Add Feed -->
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                alt="">
                        </div>
                        <!-- Feed box  -->
                        <form class="w-100">
                            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
                        </form>
                    </div>

                    <!-- Dropzone photo START -->
                    <div>
                        <label class="form-label">Upload attachment</label>
                        <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
                            <div class="dz-message">
                                <i class="bi bi-images display-3"></i>
                                <p>Drag here or click to upload photo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dropzone photo END -->

                </div>
                <!-- Modal feed body END -->

                <!-- Modal feed footer -->
                <div class="modal-footer ">
                    <!-- Button -->
                    <button type="button" class="btn btn-danger-soft me-2"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success-soft">Post</button>
                </div>
                <!-- Modal feed footer -->
            </div>
        </div>
    </div>
    <!-- Modal create Feed photo END -->

    <!-- Modal create Feed video START -->
    <div class="modal fade" id="feedActionVideo" tabindex="-1" aria-labelledby="feedActionVideoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="feedActionVideoLabel">Add post video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->

                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Add Feed -->
                    <div class="d-flex mb-3">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                alt="">
                        </div>
                        <!-- Feed box  -->
                        <form class="w-100">
                            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
                        </form>
                    </div>

                    <!-- Dropzone photo START -->
                    <div>
                        <label class="form-label">Upload attachment</label>
                        <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
                            <div class="dz-message">
                                <i class="bi bi-camera-reels display-3"></i>
                                <p>Drag here or click to upload video.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dropzone photo END -->

                </div>
                <!-- Modal feed body END -->

                <!-- Modal feed footer -->
                <div class="modal-footer">
                    <!-- Button -->
                    <button type="button" class="btn btn-danger-soft me-2"><i
                            class="bi bi-camera-video-fill pe-1"></i> Live video</button>
                    <button type="button" class="btn btn-success-soft">Post</button>
                </div>
                <!-- Modal feed footer -->
            </div>
        </div>
    </div>
    <!-- Modal create Feed video END -->

    <!-- Modal create events START -->
    <div class="modal fade" id="modalCreateEvents" tabindex="-1" aria-labelledby="modalLabelCreateAlbum"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelCreateAlbum">Create event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->
                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Form START -->
                    <form class="row g-4">
                        <!-- Title -->
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="email" class="form-control" placeholder="Event name here">
                        </div>
                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="2" placeholder="Ex: topics, schedule, etc."></textarea>
                        </div>
                        <!-- Date -->
                        <div class="col-sm-4">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control flatpickr" placeholder="Select date">
                        </div>
                        <!-- Time -->
                        <div class="col-sm-4">
                            <label class="form-label">Time</label>
                            <input type="text" class="form-control flatpickr" data-enableTime="true"
                                data-noCalendar="true" placeholder="Select time">
                        </div>
                        <!-- Duration -->
                        <div class="col-sm-4">
                            <label class="form-label">Duration</label>
                            <input type="email" class="form-control" placeholder="1hr 23m">
                        </div>
                        <!-- Location -->
                        <div class="col-12">
                            <label class="form-label">Location</label>
                            <input type="email" class="form-control" placeholder="Logansport, IN 46947">
                        </div>
                        <!-- Add guests -->
                        <div class="col-12">
                            <label class="form-label">Add guests</label>
                            <input type="email" class="form-control" placeholder="Guest email">
                        </div>
                        <!-- Avatar group START -->
                        <div class="col-12 mt-3">
                            <ul class="avatar-group list-unstyled align-items-center mb-0">
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                        alt="avatar">
                                </li>
                                <li class="ms-3">
                                    <small> +50 </small>
                                </li>
                            </ul>
                        </div>
                        <!-- Upload Photos or Videos -->
                        <!-- Dropzone photo START -->
                        <div>
                            <label class="form-label">Upload attachment</label>
                            <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
                                <div class="dz-message">
                                    <i class="bi bi-file-earmark-text display-3"></i>
                                    <p>Drop presentation and document here or click to upload.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Dropzone photo END -->
                    </form>
                    <!-- Form END -->
                </div>
                <!-- Modal feed body END -->
                <!-- Modal footer -->
                <!-- Button -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">
                        Cancel</button>
                    <button type="button" class="btn btn-success-soft">Create now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create events END -->

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/dist/tiny-slider.js"></script>
    <script src="assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/plyr/plyr.js"></script>
    <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 07:42:03 GMT -->

</html>
