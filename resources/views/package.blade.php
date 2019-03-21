@extends('default')

@section('css')

<style>
    .content-inner-2 {
        background-image: '{{ asset('/theme/assets/images/background/about-us.jpg') }}'
    }
</style>

@endsection

@section('content')

<div class="page-content">
   <!-- inner page banner -->
   <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/background/bg4.jpg') }}');">
      <div class="container">
         <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Packages</h1>
         </div>
      </div>
   </div>
   <!-- inner page banner END -->
   <!-- Breadcrumb row -->
   <div class="breadcrumb-row">
      <div class="container">
         <ul class="list-inline">
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li>packages</li>
         </ul>
      </div>
   </div>
   <!-- Breadcrumb row END -->
   <div class="section-full content-inner bg-white">
      <div class="container">
         <div class="row">
            <!-- Side bar start -->
            <div class="col-sm-4 col-md-4 col-lg-3">
               <aside  class="side-bar">
                  <div class="widget recent-posts-entry">
                     <h4 class="widget-title">Advanced Search</h4>
                     <div class="dlab-accordion advanced-search toggle" id="accordion1">
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse" href="#city" class="collapsed">
                                 Vendors
                                 </a> 
                              </h5>
                           </div>
                           <div id="city" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="input-group">
                                    <select class="form-control">
                                       <option>Select vendor</option>
                                       @if(isset($vendors))
                                          @foreach($vendors as $vendor)
                                             <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                          @endforeach
                                       @endif
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse" href="#type" class="collapsed">
                                 Vehicle Type
                                 </a> 
                              </h5>
                           </div>
                           <div id="type" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="input-group">
                                    <select class="form-control">
                                       <option>Select vehicle type</option>
                                       @if(isset($vehicleTypes))
                                          @foreach($vehicleTypes as $vehicleType)
                                             <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                                          @endforeach
                                       @endif
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title">
                                 <a data-toggle="collapse" href="#price-range">
                                 Price Range
                                 </a> 
                              </h5>
                           </div>
                           <div id="price-range" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="price-slide range-slider m-b30">
                                    <div class="price">
                                       <label for="amount">Price Range</label>
                                       <input type="text" id="amount" class="amount" readonly="" value="$200 - $5000" />
                                       <div id="slider-range"></div>
                                    </div>
                                 </div>
                                 <div class="price-slide-2 range-slider">
                                    <div class="price">
                                       <label for="amount-2">Price Range</label>
                                       <input type="text" id="amount-2" class="amount" readonly="" value="$200 - $5000" />
                                       <div id="slider-range-2"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </aside>
            </div>
            <!-- Side bar END -->
            <!-- left part start -->
            <div class="col-sm-8 col-md-8 col-lg-9">
               <div class="row">
                  <div class="p-lr15 clearfix ">
                     <div class="filter-bar clearfix m-b30 p-lr15">
                        <select class="pull-left max-w200">
                           <option>Sort by</option>
                           <option>ASC</option>
                           <option>DESC</option>
                        </select>
                     </div>
                  </div>

                  <!-- blog grid  -->
                  <div class="dlab-blog-grid-3">
                     <div class="col-md-12">
                        @if(isset($packages))
                           @foreach($packages as $package)
                              <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                                 <div class="dlab-post-media dlab-img-effect zoom-slow">
                                    @php
                                       if (isset($package->vehicle->vehicle_images)) {
                                          $img_arr = explode("|", $package->vehicle->vehicle_images);
                                          if (count($img_arr) > 0) {
                                             $count = count($img_arr);
                                             $image = $img_arr[$count-1];
                                          }
                                       }
                                    @endphp
                                    <a href="javascript:void(0)">
                                       @if(isset($image))
                                          <img src="{{ asset('storage/vehicles/'.$image) }}" alt="{{ $package->vehicle->name }}">
                                       @else
                                          <img src="{{ asset('/theme/assets/images/blog/grid/pic1.jpg') }}" alt="">
                                       @endif
                                    </a> 
                                 </div>
                                 <div class="dlab-post-info">
                                    <div class="dlab-post-title ">
                                       <h3 class="post-title">
                                          <a href="javascript:void(0);">{{ $package->name }}</a>
                                       </h3>
                                    </div>
                                    <div class="dlab-post-readmore">
                                       <h2 class="m-a0 pull-left m-r15 open-sans">PKR {{ $package->package_rate }}</h2>
                                       <a href="{{ route('site.booking', [$package->id]) }}" title="Booking it" class="site-button">Book it</a> 
                                    </div>
                                    <div class="dlab-post-tags">
                                       <div class="post-tags"> 
                                          <a href="javascript:void(0)">{{ $package->vehicle->vehicleType->name }}</a> 
                                          <a href="javascript:void(0)">{{ $package->vehicle->name }}</a> 
                                          <a href="javascript:void(0)">{{ $package->vehicle->model }}</a> 
                                          <a href="javascript:void(0)">{{ $package->vehicle->vendor->name }}</a> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
                  <!-- blog grid END -->

                  <!-- Pagination  -->
                  @if(isset($packages)){{ $packages->links('vendor.pagination.theme_pagination') }}@endif
                  <!-- Pagination END -->

               </div>
            </div>
            <!-- left part END -->
         </div>
      </div>
   </div>
</div>


@endsection