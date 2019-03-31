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
                 <h1 class="text-white">Bookings</h1>
         </div>
         </div>
     </div>
     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="javascript:void(0);">Bookings</a></li>
                 <li>{{ auth()->guard('customer')->user()->f_name." ".auth()->guard('customer')->user()->l_name }}</li>
             </ul>
         </div>
     </div>
     <div class="section-full p-t50 bg-white content-inner">
         <div class="container">
             <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                      @if(isset($bookings))
                        <table class="table table-responsive table-striped">
                            <thead>
                                <th>Vehicle</th>
                                <th>Price</th>
                                <th>Vendor</th>
                                <th>Booking Date</th>
                            </thead>
                            <tbody>
                                @forelse($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->vehicle->name }}</td>
                                        <td>{{ $booking->vehicle->price }}</td>
                                        <td>{{ $booking->vehicle->vehicleType->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($booking->booking_date)->diffForHumans() }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No Records Founds</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $bookings->links('vendor.pagination.default') }}
                      @endif
                  </div>
             </div>
         </div>
     </div>
</div>
 <!-- Content END-->

@endsection