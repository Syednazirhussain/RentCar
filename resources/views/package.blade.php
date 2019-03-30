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
            <li>package</li>
            <li>@if(isset($package)){{ $package->name }}@endif</li>
         </ul>
      </div>
   </div>
   <!-- Breadcrumb row END -->
   <div class="section-full content-inner bg-white">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="row">

                  <div class="dlab-blog-grid-3">
                     <div class="col-md-12">
                        @if(isset($vehicles))
                           @foreach($vehicles as $vehicle)
                              <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                                 <div class="dlab-post-media dlab-img-effect zoom-slow">
                                    @php
                                       if (isset($vehicle->vehicle_images)) {
                                          $img_arr = explode("|", $vehicle->vehicle_images);
                                          if (count($img_arr) > 0) {
                                             $count = count($img_arr);
                                             $image = $img_arr[$count-1];
                                          }
                                       }
                                    @endphp
                                    <a href="javascript:void(0)">
                                       @if(isset($image))
                                          <img src="{{ asset('storage/vehicles/'.$image) }}" alt="{{ $vehicle->name }}">
                                       @else
                                          <img src="{{ asset('/theme/assets/images/blog/grid/pic1.jpg') }}" alt="">
                                       @endif
                                    </a> 
                                 </div>
                                 <div class="dlab-post-info">
                                    <div class="dlab-post-title ">
                                       <h3 class="post-title">
                                          <a href="javascript:void(0);">{{ $vehicle->name }}</a>
                                       </h3>
                                    </div>
                                    <div class="dlab-post-readmore">
                                       <h2 class="m-a0 pull-left m-r15 open-sans">PKR {{ $vehicle->package->package_rate }}</h2>
                                       <a href="{{ route('site.booking', [$vehicle->id, $vehicle->package->id]) }}" title="Booking it" class="site-button">Book it</a> 
                                    </div>
                                    <div class="dlab-post-tags">
                                       <div class="post-tags"> 
                                          <a href="javascript:void(0)">{{ $vehicle->vehicleType->name }}</a> 
                                          <a href="javascript:void(0)">{{ $vehicle->model }}</a> 
                                          <a href="javascript:void(0)">{{ $vehicle->vendor->name }}</a> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>

                  @if(isset($vehicles)){{ $vehicles->links('vendor.pagination.theme_pagination') }}@endif

               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection