<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Baroqah Farm Gorontalo
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('landings/img/icons/icon-72x72.png') }}">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{ asset('landings/img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('landings/img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('landings/img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landings/img/icons/icon-180x180.png') }}">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="{{ asset('landings/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landings/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landings/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landings/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landings/css/lineicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landings/css/magnific-popup.css') }}">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('landings/style.css') }}">
    <!-- Web App Manifest-->
    {{-- <link rel="manifest" href="manifest.json"> --}}
</head>

<body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container h-100 d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper-->
            <div class="logo-wrapper"><a href="home.html"><img src="{{ asset('landings/img/icons/logo-baroqah.png') }}"
                        width="50" height="50" alt=""></a>
            </div>
            <!-- Search Form-->
            <div class="top-search-form">
                <form action="" method="">
                    <input class="form-control" type="search" placeholder="Enter your keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
        </div>
    </div>
    {{-- sini --}}

    @yield('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container h-100 px-0">
            <div class="suha-footer-nav h-100">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><i
                                class="lni lni-home"></i>Home</a></li>
                    <li class="{{ Request::is('produk') ? 'active' : '' }}"><a href="{{ url('/produk') }}"><i
                                class="lni lni-shopping-basket"></i>Ternak</a>
                    </li>
                    <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ url('/profile') }}"><i
                                class="lni lni-user"></i>Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="{{ asset('landings/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landings/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landings/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('landings/js/jquery.passwordstrength.js') }}"></script>
    <script src="{{ asset('landings/js/dark-mode-switch.js') }}"></script>
    <script src="{{ asset('landings/js/no-internet.js') }}"></script>
    <script src="{{ asset('landings/js/active.js') }}"></script>
    <script src="{{ asset('landings/js/pwa.js') }}"></script>
</body>

</html>
