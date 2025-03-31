<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="online solution, it, tech, sass, technology, teaching, learning">
    <meta name="description"
        content="Code Academics is a it solutions HTML template for all kinds of it, technology, online tech website">
    <title>Code Academics – IT Solution</title>
    <meta property="og:site_name" content="Code Academics">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Code Academics – IT Solution &amp; Web Security HTML5 Template">
    <meta name="og:image" content="img/ogg.png">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#0D86D6">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#0D86D6">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0D86D6">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logoog.svg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/clash-display.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    @yield('headerLinks')
</head>

<body>
    <div class="main-page-wrapper">

        <!-- Add your site or application content here -->
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <img src="{{ asset('assets/frontend/images/loaderlogo.svg') }}" alt="logo">
            </div>
        </div>
        <!-- preloader end  -->
        <!-- offcanvas start  -->
        <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-header">
                <a data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fas fa-times search-close" id="search-close"></i>
                </a>
            </div>
            <div class="offcanvas-body">
                <!-- Fullscreen search -->
                <div class="search-wrap">
                    <form method="get">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </form>
                </div>
                <!-- end fullscreen search -->
            </div>
        </div>
        <!-- offcanvas end  -->

        <!-- header-area start -->
            @include('frontend.layouts.navbar')
        <!-- header-area end -->

        <!-- slide-bar start -->
            @include('frontend.layouts.sidebar')
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        @yield('content')

        <!--footer-area start-->
        <footer class="footer-area pt-140 pt-lg-95">
            <img class="fot-shape-one" src="{{ asset('assets/frontend/images/line-round-4a.svg') }}"
                alt="footer shape">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 mb-1">
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__widget mb-30" data-aos="fade-right" data-aos-delay="200">
                            <p class="pe-xl-3 foter-para">An influencal creative agency. Get’s IT Solutions For Expert
                                Consultants
                            </p>
                            <a class="foter-btn" href="contact.html">Let’s Chat
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="footer__widget d-flex justify-content-md-center mb-30">
                            <ul class="fot-list">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">Blog</a>
                                </li>
                                <li>
                                    <a href="faq.html">Policy</a>
                                </li>
                                <li>
                                    <a href="faq.html">Refund</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
                        <div class="footer__widget mb-30 ps-xl-5">
                            <h4 class="text-white mb-40">gocodeacademics@gmail.com</h4>
                            <address>SCO - 207 First Floor Badwal Complex near Narinder Cenama Jalandhar</address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="techy-copyright pt-60 pb-45 pb-lg-10">
                <div class="container">
                    <div class="row gx-4 gx-xxl-5 align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <div class="copyright mb-30">
                                <h6>
                                    <a href="https://themeforest.net/user/uxaction/portfolio">Code Academics</a>
                                    © 2025, All Rights Reserved
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer__social mb-30">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-area end-->
    </div>

    <!-- JS here -->

    <script src="{{ asset('assets/frontend/js/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.supermarquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

    <!--Custom JS here -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    @yield('script')



</body>

</html>
