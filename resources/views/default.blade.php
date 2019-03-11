<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>RCT Rent a Car</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('theme/css/plugins/slicknav.min.css') }}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('theme/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('theme/css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('theme/css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('theme/css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('theme/css/reset.css') }}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('theme/style.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet">

    @yield('css')

</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{ asset('theme/img/preloader.gif') }}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> 802/2, Karachi, Pakistan
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +92 800 345 678
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09:00 - 17:00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('theme/img/logo.png') }}" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="index.html">Home</a>
                 
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="packages.html">Packages</a>
                                   
                                </li>
                                              
                                <li><a href="contact.html">Contact</a></li>

                                  <li><a href="#">Login/Register</a>
                                    <ul>
                                        <li><a href="login.html">Log In</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    @yield('content')

    

    <!--== Footer Area Start ==-->
   <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About REDPANDA Rent a Car</h2>
                            <div class="widget-body">

                                <img src="https://stsrentacar.pk/assets/web_assets/img/logo.png" width="150px" alt="STS Rent A Car">
                                <p>At REDPANDA Rent a Car, our prime business idea is simplify travelling for you and that's why our business solegen is "TRAVELLING FOR YOU"</p>
    							<p>For Picture Gallery <a href="https://stsrentacar.pk/gallery.html" class="">Click Here</a></p>



                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                  

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Get touch with RedPanda Rent a Car</h2>
                            <div class="widget-body">
                                <ul class="get-touch">
                                    <li>
                                        <p style="color: #fff">
                                            <i class="fa fa-map-marker"></i>
                                            Office # 11, Sultan Plaza Sector 5-H, 2 Minut Chowrangi, North Karachi, Shahrah-e-Usman, Sector 5 D New Karachi, Karachi, Sindh 75850
                                        </p>
                                    </li>
                                    <li><i class="fa fa-phone"></i> Helpline: 03 111 999 787</li>
                                    <li><i class="fa fa-phone"></i>+92 21 36954714</li>
                                    <li><i class="fa fa-envelope"></i>info@REDPANDA.pk</li>
                                </ul>
                                <a href="https://stsrentacar.pk/tos.html" class="">Terms and Conditions</a>&nbsp;&nbsp;&nbsp;
                                <a href="https://stsrentacar.pk/contact.html" class="map-show">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>  
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('theme/img/scroll-top.png') }}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('theme/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('theme/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('theme/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('theme/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('theme/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('theme/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('theme/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('theme/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('theme/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('theme/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('theme/js/plugins/slicknav.min.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('theme/js/main.js') }}"></script>

    @yield('js')

</body>

</html>