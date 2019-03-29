@extends('default')

@section('css')

<style>
    .content-inner-2 {
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

        <div class="form-slide">
        <div class="container">

          <form class="search-car" action="{{ route('car.search') }}" method="GET">
            <div class="form-head">
              <h2>Search the right car</h2>
            </div>
            <div class="form-find-area">
              <div class="tab-content">
                <div id="new-car"  class="tab-pane active clearfix">
                  
                  <div  id="budgetDiv" class="new_form_div">
                    <div class="input-group">
                      <select class="form-control" name="vehicle">
                        <option value="0">Select Vehicle</option>
                        @if(isset($vehicles))
                          @foreach($vehicles as $vehicle)
                            <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="input-group">
                      <select class="form-control" name="vehicle_type">
                        <option value="0">All Vehicle Types</option>
                        @if(isset($vendors))
                          @foreach($vendors as $vendor)
                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="input-group">
                      <select class="form-control" id="model" name="model">
                        <option value="0">Model</option>
                      </select>
                    </div>
                  </div>
                  <div class="input-group">
                    <button class="site-button button-lg btn-block" type="submit">SEARCH</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
        </div>

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
                      <p class="p-t0">@if(isset($generalInformation)){{ $generalInformation->title }}@endif</p>
                   </div>
                   <div class="about-us-info">
                      <p>@if(isset($generalInformation)){{ $generalInformation->about_description }}@endif</p>
                      <div class="media media-info">
                         <div class="media-left">
                            <a href="javascript:void(0);">
                            <img class="media-object" src="{{ asset('/theme/assets/images/testimonials/pic2.jpg') }}" alt="">
                            </a>
                         </div>
                         <div class="media-body p-l15">
                            <h4 class="font-weight-700 text-uppercase text-primary m-b10">Have any question ?</h4>
                            <h2 class="media-heading open-sans font-weight-700">@if(isset($generalInformation)){{ $generalInformation->contact }}@endif</h2>
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
                <li role="presentation" class="active">
                  <a data-toggle="tab"  aria-controls="upcoming"  href="#upcoming">UPCOMING</a>
                </li>
             </ul>
          </div>
          <div class="section-content ">
             <div class="row">
                <div class="dlab-tabs">
                   <div class="tab-content">
                      <div id="upcoming"  class="tab-pane active clearfix">
                         <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                          @if(isset($vehicles))
                            @foreach($vehicles as $vehicle)
                              @php
                                $images = explode("|", $vehicle->vehicle_images);
                                if (count($images) > 0) {
                                  $last_index = count($images) - 1;
                                  $image = $images[$last_index];
                                }
                              @endphp
                              <div class="item">
                                 <div class="dlab-feed-list">
                                    <div class="dlab-media">
                                      @if(isset($image))
                                        <a href="javascript:void(0);">
                                          <img src="{{ asset('storage/vehicles/'.$image) }}" alt="">
                                        </a>
                                      @endif
                                    </div>
                                    <div class="dlab-info">
                                      <h4 class="dlab-title">
                                        <a href="javascript:void(0);">{{ $vehicle->name }}</a>
                                      </h4>
                                      <div class="dlab-separator bg-black"></div>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                       <ul class="clearfix">
                                          <li>{{ $vehicle->model }}</li>
                                          {{-- <li>Manual</li>
                                          <li>210 hp </li> --}}
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                            @endforeach
                          @endif
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
                @if(isset($vehicleTypes))
                  @foreach($vehicleTypes as $vehicleType)
                    <div class="item">
                       <div class="ow-client-logo">
                          <div class="client-logo">
                            <a href="javascript:void(0);">
                              <img src="{{ asset('storage/vendors/'.$vehicleType->logo) }}" alt="">
                            </a>
                          </div>
                       </div>
                    </div>
                  @endforeach
                @endif
             </div>
          </div>
       </div>
    </div>
    <!-- Client logo Carousel END -->
    <!-- Content END-->
 </div>

@endsection


@section('js')

<script type="text/javascript">
    var year = (new Date()).getFullYear();
    var current = year;
    var numberOfYearBack = 10;
    var backYear = current - numberOfYearBack;

    for(var i = current ; i >= backYear ; i--) {
        $('#model').append('<option value="' + (i) + '">' + (i) + '</option>');
    }




</script>

@endsection


