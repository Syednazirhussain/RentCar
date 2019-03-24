@extends('default')

@section('css')

<style>
  .dzseth {
    height: 100px
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
                <h1 class="text-white">Services</h1>
    </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="javascript:void(0)">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    
<!-- About Us -->
<div class="section-full bg-white content-inner">
  <div class="container">

    @if(isset($services))
      @php $flag = 0; @endphp
      @foreach($services as $service)

        @if( $flag != 0 && ( $flag%2 != 0) )
          <div class="row dzseth m-b50">
            <div class="col-md-6 col-sm-6">
              <div class="img-responsive">              
                @if($service->image != null)
                  <img class="img-thumbnail"  src="{{ asset('storage/services/'.$service->image) }}" alt="{{ $service->title }}">
                @else
                  <img class="img-thumbnail"  src="{{ asset('/theme/assets/images/car.png') }}" alt="{{ $service->title }}">
                @endif
              </div>
            </div>
            <div class="col-md-6 col-sm-6 dis-tbl">
              <div class="dis-tbl-cell">
                <h2 class="h2 p-b20"> 
                  <span class="text-primary">{{ $service->title }}</span>
                </h2>
                <p>{{ strip_tags($service->descriptions) }}</p>
              </div>
            </div>
          </div>
        @else
          <div class="row dzseth">
            <div class="col-md-6 col-sm-6 dis-tbl">
              <div class="dis-tbl-cell">
                <h2 class="h2 p-b20">
                  <span class="text-primary">{{ $service->title }}</span>
                </h2>
                <p>{{ strip_tags($service->descriptions) }}</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="img-responsive">              
                @if($service->image != null)
                  <img class="img-thumbnail" src="{{ asset('storage/services/'.$service->image) }}" alt="{{ $service->title }}">
                @else
                  <img class="img-thumbnail" src="{{ asset('/theme/assets/images/car.png') }}" alt="{{ $service->title }}">
                @endif
              </div>
            </div>
          </div>
        @endif

        {{ $flag++ }}
      @endforeach

    @endif


  </div>
</div>
<!-- About Us End -->

</div>
<!-- Content END-->

@endsection