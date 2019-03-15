@extends('default')

@section('css')

<style>
    .section-full > .about-us > .bg-white > .content-inner-2 {
        background-image: '{{ asset('/theme/assets/images/background/about-us.jpg') }}'
    }
</style>

@endsection

@section('content')

 <!-- Content -->
 <div class="page-content">
    <!-- Slider -->
    <div class="main-slider style-two default-banner">
       <div class="tp-banner-container">
          <div class="tp-banner" >
             <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                   <ul>
                      <!-- SLIDE 1 -->
                      <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                         <!-- MAIN IMAGE -->
                         <img src="{{ asset('/theme/assets/images/main-slider/slide1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                         <!-- LAYERS -->
                         <!-- LAYER NR. 1 -->
                         <div class="tp-caption   tp-resizeme" 
                            id="slide-2957-layer-5" 
                            data-x="502" 
                            data-y="center" 
                            data-voffset="130" 
                            data-width="['none','none','none','none']"
                            data-height="['none','none','none','none']"
                            data-transform_idle="o:1;"
                            data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
                            data-transform_out="opacity:0;s:300;" 
                            data-start="1200" 
                            data-responsive_offset="on" 
                            style="z-index: 11;">
                            <img src="{{ asset('/theme/assets/images/car2.png') }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
                         </div>
                      </li>
                      <!-- SLIDE 2 -->
                      <!-- SLIDE  -->
                      <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                         <!-- MAIN IMAGE -->
                         <img src="{{ asset('/theme/assets/images/main-slider/slide2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                         <!-- LAYERS -->
                         <!-- LAYER NR. 1 -->
                         <div class="tp-caption   tp-resizeme" 
                            id="slide-2957-layer-4" 
                            data-x="502" 
                            data-y="center" 
                            data-voffset="130" 
                            data-width="['none','none','none','none']"
                            data-height="['none','none','none','none']"
                            data-transform_idle="o:1;"
                            data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
                            data-transform_out="opacity:0;s:300;" 
                            data-start="1200" 
                            data-responsive_offset="on" 
                            style="z-index: 11;">
                            <img src="{{ asset('/theme/assets/images/car3.png') }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
                         </div>
                      </li>
                   </ul>
                   <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                </div>
             </div>
             <!-- END REVOLUTION SLIDER -->
          </div>
       </div>
       <!-- Form -->   
       <div class="form-slide">
          <div class="container">
             <form class="search-car" action="http://carzone.dexignlab.com/xhtml/new-car-search-result-list.html" method="post">
                <div class="form-head">
                   <h2>Search the right car</h2>
                </div>
                <!-- TABS -->
                <div class="form-find-area">
                   <div class="tab-content">
                      <!-- NEW CAR -->
                      <div id="new-car"  class="tab-pane active clearfix">
                         <div  id="budgetDiv" class="new_form_div">
                            <div class="input-group">
                               <select class="form-control">
                                  <option>Select Budget</option>
                                  <option>1 Lakh - 5 Lakh</option>
                                  <option>5 Lakh - 10 Lakh</option>
                                  <option>10 Lakh - 20 Lakh</option>
                                  <option>20 Lakh - 50 Lakh</option>
                                  <option>50 Lakh - 1 Crore</option>
                                  <option>Above 1 Crore</option>
                               </select>
                            </div>
                            <div class="input-group">
                               <select class="form-control">
                                  <option>All Vehicle Types</option>
                                  <option>Hatchback</option>
                                  <option>Sedans</option>
                                  <option>MUV</option>
                               </select>
                            </div>
                            <div class="input-group">
                               <select class="form-control">
                                  <option>All Vehicle Types</option>
                                  <option>Hatchback</option>
                                  <option>Sedans</option>
                                  <option>MUV</option>
                               </select>
                            </div>
                         </div>
                         <div class="input-group">
                            <button class="site-button button-lg btn-block" type="submit">SEARCH</button>
                         </div>
                         <div class="input-group text-center">
                            <a class="site-button-link" href="javascript:void(0);">ADVANCED SEARCH <i class="fa fa-angle-right"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
       <!-- Form END -->   
    </div>
    <!-- Slider END -->
    <!-- About Us -->
    <div class="section-full about-us bg-white content-inner-2" style="background-position:bottom; background-repeat:no-repeat; background-size:100%;">
       <div class="dlab-info-about">
          <div class="container">
             <div class="row">
                <div class="col-md-5">
                   <div class="">
                      <h3 class="h3 text-uppercase m-b10 m-t0">About us </h3>
                      <p class="p-t0">Everything you need to build an amazing dealership website.</p>
                   </div>
                   <div class="about-us-info">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      <div class="media media-info">
                         <div class="media-left">
                            <a href="javascript:void(0);">
                            <img class="media-object" src="{{ asset('/theme/assets/images/testimonials/pic2.jpg') }}" alt="">
                            </a>
                         </div>
                         <div class="media-body p-l15">
                            <h4 class="font-weight-700 text-uppercase text-primary m-b10">Have any question ?</h4>
                            <h2 class="media-heading open-sans font-weight-700">01 123 456 789</h2>
                         </div>
                      </div>
                      <div class="m-t30">
                         <a href="javascript:void(0);" class="site-button">Read More</a>
                      </div>
                   </div>
                </div>
                <div class="col-md-7">
                   <div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
                      <img src="{{ asset('/theme/assets/images/car.png') }}" alt=""> 
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- About Us END -->
    <!-- For Your Quick Look -->
    <div class="section-full bg-white content-inner car-listing">
       <div class="container">
          <div class="section-head">
             <h3 class="h3 text-uppercase">For your quick look</h3>
             <ul class="nav theme-tabs">
                <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="upcoming"  href="#upcoming">UPCOMING</a></li>
                <li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#popular">POPULAR</a></li>
                <li role="presentation" ><a data-toggle="tab"  aria-controls="latest" href="#latest">LATEST</a></li>
             </ul>
          </div>
          <div class="section-content ">
             <div class="row">
                <div class="dlab-tabs">
                   <div class="tab-content">
                      <div id="upcoming"  class="tab-pane active clearfix">
                         <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic2.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic3.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic4.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div id="popular"  class="tab-pane clearfix fade">
                         <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic3.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic4.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic2.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div id="latest"  class="tab-pane clearfix fade">
                         <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic2.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic3.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="item">
                               <div class="dlab-feed-list">
                                  <div class="dlab-media"> 
                                     <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/our-work/work/pic4.jpg') }}" alt=""></a> 
                                  </div>
                                  <div class="dlab-info">
                                     <h4 class="dlab-title"><a href="javascript:void(0);">Hyundai santa fe sport </a></h4>
                                     <div class="dlab-separator bg-black"></div>
                                     <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                  </div>
                                  <div class="icon-box-btn text-center">
                                     <ul class="clearfix">
                                        <li>2017</li>
                                        <li>Manual</li>
                                        <li>210 hp </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- For Your Quick Look END -->
    <!-- Client logo Carousel -->
    <div class="section-full bg-img-fix p-t30 p-b30 ">
       <div class="container">
          <div class="section-content">
             <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"><a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo1.jpg') }}" alt=""></a></div>
                   </div>
                </div>
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"> <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo2.jpg') }}" alt=""></a> </div>
                   </div>
                </div>
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"> <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo3.jpg') }}" alt=""></a> </div>
                   </div>
                </div>
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"> <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo4.jpg') }}" alt=""></a> </div>
                   </div>
                </div>
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"> <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo5.jpg') }}" alt=""></a> </div>
                   </div>
                </div>
                <div class="item">
                   <div class="ow-client-logo">
                      <div class="client-logo"> <a href="javascript:void(0);"><img src="{{ asset('/theme/assets/images/client-logo/logo2.jpg') }}" alt=""></a> </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Client logo Carousel END -->
    <!-- Content END-->
 </div>

@endsection