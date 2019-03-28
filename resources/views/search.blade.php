@extends('default')


@section('content')

<div class="page-content">
   <!-- inner page banner -->
   <div class="dlab-bnr-inr overlay-black-middle used-car-banner latest-cars" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
      <div class="container">
         <div class="dlab-bnr-inr-entry">
{{--             <h1 class="text-white">Know everything about the Popular cars in market</h1> --}}
            <div class="used-car">
               <div class="dlab-tabs">
                  <div class="tab-content">
                     <div class="tab-pane clearfix active in" >
                        <form action="{{ route('car.search') }}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                    <select class="form-control">
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
                                      <option>Model</option>
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
   <!-- inner page banner END -->
   <!-- Breadcrumb row -->
   <div class="breadcrumb-row">
      <div class="container">
         <ul class="list-inline">
            <li><a href="javascript:void(0);">Home</a></li>
            <li>Cars</li>
         </ul>
      </div>
   </div>
   <!-- Breadcrumb row END -->
   <!-- Breadcrumb row END -->
   <div class="section-full content-inner bg-white">
      <div class="container">
         <div class="row">
            <!-- left part start -->
            <div class="col-sm-12 col-md-12">
               <div class="row">
                  <div id="masonry" class="dlab-blog-grid-3">
                    @if(isset($vehicles))
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
                               <div class="dlab-media">
                                  <a href="javascript:void(0);" style="cursor: pointer;">
                                    @if(!is_null($image))
                                      <img src="{{ asset('storage/vehicles/'.$image) }}">
                                    @else
                                      <img src="{{ asset('/theme/assets/images/our-work/work/pic1.jpg') }}">
                                    @endif
                                  </a>
                               </div>
                               <div class="dlab-info">
                                  <h4 class="dlab-title">
                                    <a href="javascript:void(0);">{{ $vehicle->name }}</a>
                                  </h4>
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