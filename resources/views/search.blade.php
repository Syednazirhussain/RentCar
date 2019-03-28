@extends('default')

@section('css')

<style type="text/css">
  .image {
    height: 356px
  }
</style>

@endsection

@section('content')

<div class="page-content">
   <!-- inner page banner -->
   <div class="dlab-bnr-inr overlay-black-middle used-car-banner latest-cars" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
      <div class="container">
         <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Available Car's</h1>
            <div class="used-car">
               <div class="dlab-tabs">
                  <div class="tab-content">
                     <div class="tab-pane clearfix active in" >
                        <form action="{{ route('car.search') }}" method="GET">
                           <div class="row">
                              <div class="col-md-3 col-sm-3">
                                 <div class="input-group">
                                  <select class="form-control" name="vehicle">
                                    <option>Select Vehicle</option>
                                    @if(isset($allVehicles))
                                      @foreach($allVehicles as $vehicle)
                                        <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                      @endforeach
                                    @endif
                                  </select>
                                 </div>
                              </div>
                              <div class="col-md-3 col-sm-3">
                                 <div class="input-group">
                                    <select class="form-control" name="vehicle_type">
                                      <option>All Vehicle Types</option>
                                      @if(isset($vendors))
                                        @foreach($vendors as $vendor)
                                          <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                        @endforeach
                                      @endif
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3 col-sm-3">
                                 <div class="input-group">
                                    <select class="form-control" id="model" name="model">
                                      <option value="0">Model</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3 col-sm-3">
                                 <div class="input-group">
                                    <button class="site-button btn-block" type="submit">SEARCH</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcrumb-row">
      <div class="container">
         <ul class="list-inline">
            <li><a href="javascript:void(0);">Home</a></li>
            <li>Car's</li>
         </ul>
      </div>
   </div>
   <div class="section-full content-inner bg-white">
      <div class="container">
         <div class="row">
            <!-- left part start -->
            <div class="col-sm-12 col-md-12">
               <div class="row">
                  <div id="masonry" class="dlab-blog-grid-3">
                    @if(isset($vehicles))
                      @if(count($vehicles) > 0)
                        @foreach($vehicles as $vehicle)

                          @php
                            $image_arr = explode("|", $vehicle->vehicle_images);
                            $image = null;
                            if (count($image_arr) > 0) {
                              $count = count($image_arr) - 1;
                              $image = $image_arr[$count];
                            }
                          @endphp

                          <div class="post card-container col-md-6 col-sm-6 col-xs-12">
                              <div class="dlab-feed-list m-b30">
                                
                                <div class="img-responsive">                                
                                  @if(!is_null($image))
                                    <a href="{{ route('car.details.show', [$vehicle->id]) }}">
                                      <img class="image" src="{{ asset('storage/vehicles/'.$image) }}">
                                    </a>
                                  @else
                                    <a href="{{ route('car.details.show', [$vehicle->id]) }}">
                                      <img class="image" src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}">
                                    </a>
                                  @endif
                                </div>

                                 <div class="dlab-info">
                                    <h4 class="dlab-title">
                                      <a href="javascript:void(0);">{{ $vehicle->name }}</a>
                                    </h4>
                                    <div class="dlab-separator bg-black"></div>
                                    <p class="dlab-price">
                                      <span class="text-primary">{{ $vehicle->price }} PKR</span>
                                    </p>
                                 </div>

                                 <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                       <li>{{ $vehicle->vehicleType->name }}</li>
                                       <li>{{ $vehicle->model }}</li>
                                       <li>{{ $vehicle->vendor->name }}</li>
                                    </ul>
                                 </div>
                              </div>
                          </div>
                        @endforeach

                        {{ $vehicles->links('vendor.pagination.default') }}
                      @else
                        @foreach($allVehicles as $vehicle)

                          @php
                            $image_arr = explode("|", $vehicle->vehicle_images);
                            $image = null;
                            if (count($image_arr) > 0) {
                              $count = count($image_arr) - 1;
                              $image = $image_arr[$count];
                            }
                          @endphp

                          <div class="post card-container col-md-6 col-sm-6 col-xs-12">
                              <div class="dlab-feed-list m-b30">
                                
                                <div class="img-responsive">                                
                                  @if(!is_null($image))
                                    <a href="{{ route('car.details.show', [$vehicle->id]) }}">
                                      <img class="image" src="{{ asset('storage/vehicles/'.$image) }}">
                                    </a>
                                  @else
                                    <a href="{{ route('car.details.show', [$vehicle->id]) }}">
                                      <img class="image" src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}">
                                    </a>
                                  @endif
                                </div> 

                                 <div class="dlab-info">
                                    <h4 class="dlab-title">
                                      <a href="javascript:void(0);">{{ $vehicle->name }}</a>
                                    </h4>
                                    <div class="dlab-separator bg-black"></div>
                                    <p class="dlab-price">
                                      <span class="text-primary">{{ $vehicle->price }} PKR</span>
                                    </p>
                                 </div>

                                 <div class="icon-box-btn text-center">
                                    <ul class="clearfix">
                                       <li>{{ $vehicle->vehicleType->name }}</li>
                                       <li>{{ $vehicle->model }}</li>
                                       <li>{{ $vehicle->vendor->name }}</li>
                                    </ul>
                                 </div>
                              </div>
                          </div>
                        @endforeach

                        {{ $allVehicles->links('vendor.pagination.default') }}
                      @endif
                    @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
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