<!DOCTYPE html>
<!-- Meta -->
<html lang="en">
   <head>
      <!-- Page Title Here -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="carzone" />
      <meta name="author" content="syed nazir hussain" />
      <meta name="robots" content="rent a car" />
      <meta name="description" content="CareZone is a Clean, Modern and Big Car Dealer, Car Portal, Second Hand Car Portal, Compare Car and Car Specification Web Portal HTML 5 Template. CarZone is a ready made Wire-frame for HTML File with all required pages." />
      <meta name="format-detection" content="telephone=no">
      <!-- Favicons Icon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/theme/assets/images/favicon.png') }}" />
      <link rel="icon" href="{{ asset('/theme/assets/images/favicon.ico') }}" type="image/x-icon" />
      <!-- Page Title Here -->
      <title>CarZone</title>
      <!-- Mobile Specific -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Stylesheets -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/fontawesome/css/font-awesome.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/flaticon/css/flaticon.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/owl.carousel.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/bootstrap-select.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/animate.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/plugins/rangeslider/rangeslider.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/style.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/templete.css') }}">
      <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/css/skin/skin-1.css') }}">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
      <!-- Google Analytic Code -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120204426-2"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-120204426-2');
      </script>
      <!-- Google Analytic Code --><!-- Revolution Slider Css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/plugins/revolution/v5.4.3/css/settings.css') }}">
      <!-- Revolution Navigation Style -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/theme/assets/plugins/revolution/v5.4.3/css/navigation.css') }}">
      @yield('css')
   </head>
   <body id="bg">
      <div class="page-wraper">
         <div id="loading-area"></div>
         <!-- header -->
         <header class="site-header header-transparent">
            <div class="top-bar">
               <div class="container">
                  <div class="row">
                     <div class="dlab-topbar-left">
                        <ul>
                           <li><a href="javascript:void(0);" >Get On Road Price</a></li>
                           <li><a href="javascript:void(0);" >Ask a Question</a></li>
                        </ul>
                     </div>
                     <div class="dlab-topbar-right topbar-social">
                        <ul>
                           <li>
                              <a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> @if(isset($generalInformation)){{ $generalInformation->email }} @endif</a>
                           </li>
                           <li><a href="@if(isset($generalInformation)){{ $generalInformation->facebook }}@else {{ 'javascript:void(0);' }}@endif" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="@if(isset($generalInformation)){{ $generalInformation->instagram}}@else {{ 'javascript:void(0);' }}@endif" class="site-button-link google-plus hover"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="@if(isset($generalInformation)){{ $generalInformation->twitter}}@else {{ 'javascript:void(0);' }}@endif" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="@if(isset($generalInformation)){{ $generalInformation->linkdin}}@else {{ 'javascript:void(0);' }}@endif" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- main header -->
            <div class="sticky-header main-bar-wraper">
               <div class="main-bar clearfix ">
                  <div class="container clearfix">
                     <!-- website logo -->
                     <div class="logo-header mostion">
                        <a href="javascript:void(0);">
                           <img src="@if(isset($generalInformation)){{ asset('storage/'.$generalInformation->logo) }} @else {{ asset('/theme/assets/images/logo-light.png') }} @endif" class="logo" alt=""></a>
                     </div>
                     <!-- nav toggle button -->
                     <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
                     <i class="fa fa-bars"></i>
                     </button>
                     <!-- Quik search -->
                     <div class="dlab-quik-search bg-primary ">
                        <form action="javascript:void(0);">
                           <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                           <span id="quik-search-remove"><i class="fa fa-close"></i></span>
                        </form>
                     </div>
                     <!-- main nav -->
                     <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <li class="active has-mega-menu demos"> <a href="{{ route('site.index') }}">Home</a></li>
                           <li>
                              <a href="{{ route('site.pages', ['about']) }}">About</a>
                           </li>
                           <li>
                              <a href="{{ route('site.service') }}">Services</a>
                           </li>
                           <li>
                              <a href="{{ route('site.packages') }}">Packages</a>
                           </li>
                           <li>
                              <a href="{{ route('site.contact') }}">Contact</a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">Login/Register</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ route('customer.login') }}">Login</a></li>
                                 <li><a href="{{ route('customer.register') }}">Register</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- main header END -->
         </header>
         <!-- header END -->
         @yield('content')
         <!-- Footer -->
         <footer class="site-footer text-uppercase" style="display: block; height: 504px;">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                           <h5 class="m-b30 text-white">About REDPANDA Rent a Car</h5>
                           <div class="widget-body">
                              <img src="@if(isset($generalInformation)){{ asset('storage/'.$generalInformation->logo) }} @else {{ asset('/theme/assets/images/logo-light.png') }} @endif" width="150px" alt="STS Rent A Car">
                              <p>@if(isset($generalInformation)){{ $generalInformation->footer_description  }}@endif</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                           <h5 class="m-b30 text-white ">Contact us</h5>
                           <ul>
                              <li><i class="fa fa-map-marker"></i><strong>address</strong> @if(isset($generalInformation)){{ $generalInformation->address  }}@endif</li>
                              <li><i class="fa fa-phone"></i><strong>phone</strong>@if(isset($generalInformation)){{ $generalInformation->helpline  }}@endif (24/7 Support Line)</li>
                              <li><i class="fa fa-envelope"></i><strong>email</strong>@if(isset($generalInformation)){{ $generalInformation->email  }}@endif</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-6 footer-col-4 ">
                        <div class="widget">
                           <p class="text-capitalize"> <a href="{{ route('site.pages', ['term-n-conditions']) }}">Term & Conditions</a> </p>
                           <ul class="list-inline m-a0">
                              <li><a href="@if(isset($generalInformation)){{ $generalInformation->facebook }}@else {{ 'javascript:void(0);' }}@endif" class="site-button facebook circle"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="@if(isset($generalInformation)){{ $generalInformation->instagram}}@else {{ 'javascript:void(0);' }}@endif" class="site-button google-plus circle"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="@if(isset($generalInformation)){{ $generalInformation->twitter}}@else {{ 'javascript:void(0);' }}@endif" class="site-button twitter circle"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="@if(isset($generalInformation)){{ $generalInformation->linkdin}}@else {{ 'javascript:void(0);' }}@endif" class="site-button linkedin circle"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer bottom part --> 
         </footer>
         <!-- Footer END-->
         <!-- scroll top button -->
         <button class="scroltop fa fa-chevron-up" ></button>
      </div>
      <script src="{{ asset('/theme/assets/js/jquery.min.js') }}" type="text/javascript"></script>
      <!-- JavaScript  files ========================================= -->
      <script src="{{ asset('/theme/assets/js/wow.js') }}"></script>
      <!-- wow.min js -->
      <script src="{{ asset('/theme/assets/js/dz.ajax.js') }}"></script>
      <!-- revolution JS FILES -->
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/jquery.themepunch.tools.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/jquery.themepunch.revolution.min.js') }}"></script>
      <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.video.min.js') }}"></script>
      <script src="{{ asset('/theme/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
      <script  src="{{ asset('/theme/assets/js/rev.slider.js') }}"></script>
      
      <script src="{{ asset('/theme/assets/js/combine.js') }}"></script>
      <script src="{{ asset('/theme/assets/js/jquery.searchable-1.0.0.min.js') }}"></script>

          <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
      <script>
         var captcha_site_key = "{{ config('rentcar.RECAPTCHA.SITE_KEY') }}";
      </script>
      <!-- custom fuctions  -->
      <script>
         jQuery(document).ready(function() {
             'use strict';
             dz_rev_slider_1();  
         }); /*ready*/
      </script>
   </body>

   @yield('js')
   <!-- Mirrored from carzone.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 07:41:13 GMT -->
</html>