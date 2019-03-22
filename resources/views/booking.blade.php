@extends('default')

@section('css')

<style type="text/css">
  .required {
    color: red;
    font-size: 20px
  }
</style>


@endsection


@section('content')

 <!-- Content -->
<div class="page-content">
     <!-- inner page banner -->
     <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
         <div class="container">
             <div class="dlab-bnr-inr-entry">
                 <h1 class="text-white">@if(isset($package)){{ $package->name }}@else{{ 'package' }}@endif</h1>
         </div>
         </div>
     </div>
     <!-- inner page banner END -->
     <!-- Breadcrumb row -->
     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="javascript:void(0);">Home</a></li>
                 <li>@if(isset($package)){{ $package->name }}@else{{ 'package' }}@endif</li>
             </ul>
         </div>
     </div>
     <!-- Breadcrumb row END -->
     <div class="section-full p-t50 bg-white content-inner">
         <div class="container">
            @if(isset($package))

             <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-8">
                   <div class="owl-fade-one owl-carousel owl-btn-center-lr">
                      @if(isset($images))
                        @foreach($images as $image)
                             <div class="item">
                                <div class="dlab-thum-bx"> 
                                   <img src="{{ asset('storage/vehicles/'.$image) }}" alt="{{ $package->vehicle->name }}"> 
                                </div>
                             </div>
                        @endforeach
                      @else
                           <div class="item">
                              <div class="dlab-thum-bx"> 
                                 <img src="{{ asset('/theme/assets/images/blog/default/thum1.jpg') }}" alt="{{ $package->vehicle->name }}"> 
                              </div>
                           </div>
                      @endif
                   </div>
                   <div class="m-tb30">
                      <h3 class="h3 m-t0">{{ $package->name }}</h3>
                      <ul class="used-car-dl-info">
                         <li><i class="fa fa-calendar"></i> Updated on {{ \Carbon\Carbon::parse($package->updated_at)->diffForHumans() }}</li>
                      </ul>
                   </div>
                   <div class="clearfix">
                      <ul class="nav theme-tabs m-b10">
                         <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="features" href="#features">Details</a></li>
                         <li role="presentation"><a data-toggle="tab"  aria-controls="specifications"  href="#specifications">Car Specifications</a></li>
                      </ul>
                      <div class="dlab-tabs">
                         <div class="tab-content">
                            
                            <div id="specifications"  class="tab-pane active clearfix city-list">
                               <div class="dlab-accordion advanced-search toggle" id="accordion1">

                                  <div class="panel">
                                     <div class="acod-head">
                                        <h5 class="acod-title"> 
                                           <a data-toggle="collapse" href="#engine-specifications" class="collapsed">
                                              Package Details
                                           </a>
                                        </h5>
                                     </div>
                                     <div id="engine-specifications" class="acod-body collapse">
                                        <div class="acod-content">
                                           <ul class="table-dl clearfix">
                                              <li>
                                                 <div class="leftview">Vendor</div>
                                                 <div class="rightview">@if(isset($package->vehicle)){{ $package->vehicle->vehicleType->name }}@endif</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Vehicle Name</div>
                                                 <div class="rightview">@if(isset($package->vehicle)){{ $package->vehicle->name }}@endif</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Vehicle Type</div>
                                                 <div class="rightview">@if(isset($package->vehicle)){{ $package->vehicle->vendor->name }}@endif</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Vehicle Number</div>
                                                 <div class="rightview">@if(isset($package->vehicle)){{ $package->vehicle->model }}@endif</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Rate</div>
                                                 <div class="rightview">{{ $package->package_rate }} PKR</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Overtime Rate</div>
                                                 <div class="rightview">{{ $package->package_overtime_rate }} PKR</div>
                                              </li>
                                              <li>
                                                 <div class="leftview">Extra Fuel Rate</div>
                                                 <div class="rightview">{{ $package->package_extra_fuel }} PKR</div>
                                              </li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>

                                  
                                  @if(isset($package->vehicle->vehicleHasSpecifications))
                                    <div class="panel">
                                     <div class="acod-head">
                                        <h5 class="acod-title"> 
                                           <a data-toggle="collapse" href="#car-specifications">
                                           Car Specifications
                                           </a>
                                        </h5>
                                     </div>
                                     <div id="car-specifications" class="acod-body collapse in">
                                        <div class="acod-content">
                                           <ul class="table-dl clearfix">
                                              @foreach($package->vehicle->vehicleHasSpecifications as $vehicle_has_specification)
                                                <li>
                                                   <div class="leftview">{{ $vehicle_has_specification->vehicleSpecification->name }}</div>
                                                </li>
                                              @endforeach
                                           </ul>
                                        </div>
                                     </div>
                                    </div>
                                  @endif



                               </div>
                            </div>



                         </div>
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4">
                  <div class="car-dl-info m-b30">
                     <div class="price">
                        <h2 class="m-t0 m-b5">@if(isset($package)){{ $package->name }}@endif</h2>
                        <span>Price @if(isset($package)){{ $package->package_rate }}@endif</span>   
                     </div>
                     @include('include.messages')
                     @if(auth()->guard('customer')->check())       
                     <form action="{{ route('customer.booking') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="package_id" value="@if(isset($package)){{ $package->id }}@endif">
                        <div class="form-group">
                            <label class="control-label">Booking Date <span class="required">*</span></label>
                            <input name="booking_date" value="{{ old('booking_date') }}" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pickup Time <span class="required">*</span></label>
                            <input name="pickup_time" value="{{ old('pickup_time') }}" type="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Dropoff Time</label>
                            <input name="dropoff_time" value="{{ old('dropoff_time') }}" type="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pickup Address <span class="required">*</span></label>
                            <textarea name="pickup_address" class="form-control" style="resize: none;">{{ old('pickup_address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">DropOff Address <span class="required">*</span></label>
                            <textarea name="dropoff_address" class="form-control"  style="resize: none;">{{ old('dropoff_address') }}</textarea>
                        </div>
                        <div class="clearfix">
                          <input type="submit" class="btn-primary site-button btn-block" value="Book Now">
                        </div>
                     </form>
                     @else
                      <a href="{{ route('customer.login') }}" class="btn-primary site-button btn-block">Login</a>
                     @endif
                  </div>
                </div>
             </div>
             @endif
         </div>
     </div>
</div>
 <!-- Content END-->

@endsection