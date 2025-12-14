<!DOCTYPE html>
<html lang="en">

<head>
    <title>VibeScape</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<style>
    .hover-card {
        transition: all 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .hover-small {
        transition: all 0.3s ease;
    }

    .hover-small:hover {
        background-color: #f8f9fa;
        transform: translateY(-3px);
    }

    .object-fit-cover {
        object-fit: cover;
    }

    .hover-card {
        transition: all 0.35s ease;
        background: #fff;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .object-fit-cover {
        object-fit: cover;
        height: 100%;
    }

    /* Mobile adjustments */
    @media (max-width: 576px) {
        .hover-card img {
            border-radius: 1rem 1rem 0 0 !important;
        }

        .hover-card {
            border-radius: 1rem !important;
        }
    }


    .hover-card {
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .hover-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .object-fit-cover {
        object-fit: cover;
    }

    /* Category badge color styles (you can map by category) */
    .blog-badge {
        background-color: #eef6ff;
        color: #0d6efd;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    /* Example color mapping for categories */
    .blog-badge.sports {
        background-color: #e6f3ff;
        color: #007bff;
    }

    .blog-badge.travel {
        background-color: #fff0e6;
        color: #ff6600;
    }

    .blog-badge.lifestyle {
        background-color: #fff8e6;
        color: #ffb300;
    }

    /* Optional: center title on hover */
    .card-body a:hover {
        color: #198754;
    }


    .site-navigation {
        background: #fff;
        border-radius: 0;
    }

    .site-menu .nav-link {
        color: #333;
        position: relative;
        transition: all 0.3s ease;
        padding-bottom: 5px;
    }

    /* Underline hover animation */
    .site-menu .nav-link::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        left: 0;
        bottom: 0;
        background: #198754;
        /* Bootstrap success color */
        transition: width 0.3s ease;
    }

    .site-menu .nav-link:hover::after,
    .site-menu .nav-link.active::after {
        width: 100%;
    }

    .site-menu .nav-link:hover {
        color: #198754;
    }

    /* Dropdown styling */
    .dropdown-menu {
        min-width: 180px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item {
        padding: 10px 15px;
        transition: background-color 0.3s ease, color 0.3s ease;
        font-weight: 500;
    }

    .dropdown-item:hover {
        background-color: #198754;
        color: #fff;
    }

    /* Subtle shadow on scroll or separation */
    .border-top {
        border-color: #eaeaea !important;
    }

    section {
        font-family: 'Poppins', sans-serif;
    }

    h3 {
        letter-spacing: 0.5px;
    }

    img {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    img:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>

<body>

    <div class="site-wrap">

        <!-- Mobile Menu -->
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- Header -->
        <header class="site-navbar pt-3" role="banner">
            <div class="container-fluid">

                <div class="row align-items-center">

                    <!-- Logo -->
                    <div class="col-6 col-xl-6 logo">
                        <h1 class="mb-0">
                            <a href="index.html" class="text-black h2 mb-0">VibeScape</a>
                        </h1>
                    </div>



                </div> <!-- .row -->

                <!-- Desktop Navigation -->
                <div class="col-12 d-none d-xl-block border-top">
                    <nav class="site-navigation text-center" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">

                            <li class="{{ request()->is('Test') ? 'active' : '' }}">
                                <a href="{{ url('/Test') }}">Homepage</a>
                            </li>

                            <li class="{{ request()->is('about') ? 'active' : '' }}">
                                <a href="{{ url('/about') }}">About</a>
                            </li>

                            <li
                                class="has-children {{ request()->is('travel') || request()->is('food') || request()->is('sport') || request()->is('nature') ? 'active' : '' }}">
                                <a href="#">Category</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/travel') }}">Travel</a></li>
                                    <li><a href="{{ url('/food') }}">Food</a></li>
                                    <li><a href="{{ url('/sport') }}">Sports</a></li>
                                    <li><a href="{{ url('/nature') }}">Nature</a></li>
                                </ul>
                            </li>

                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                <a href="{{ url('/contact') }}">Contact Us</a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div> <!-- .container-fluid -->
        </header>
    </div> <!-- .site-wrap -->
    <hr>



    @yield('content')
    @yield('travel')
    @yield('food')
    @yield('nature')
    @yield('sport')
    @yield('contactus')
    @yield('about')
    @yield('Show detail blog')


    <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 ml-auto">
                    <h3 class="footer-heading mb-4">Quick Menu</h3>
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Subscribes</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        <li><a href="{{ url('/travel') }}">Travel</a></li>
                        <li><a href="{{ url('/food') }}">Food</a></li>
                        <li><a href="{{ url('/sport') }}">Sports</a></li>
                        <li><a href="{{ url('/nature') }}">Nature</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Subscribe</h3>
                        <form action="" method="post" class="form-footer-subscribe">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control">
                                <input type="submit" class="btn btn-primary text-white" value="Subscribe">
                            </div>
                        </form>
                    </div>

                    <div>
                        <h3 class="footer-heading mb-4">Connect With Us</h3>
                        <p>
                            <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                            <a href="#"><span class="icon-twitter p-2"></span></a>
                            <a href="#"><span class="icon-instagram p-2"></span></a>
                            <a href="#"><span class="icon-rss p-2"></span></a>
                            <a href="#"><span class="icon-envelope p-2"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>