@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vehicle Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  <form action="{{ route('admin.vehicleTypes.update', [$vehicleType->id]) }}" method="POST" enctype="multipart/form-data">
                      @include('admin.vehicle_types.fields')
                  </form>
               </div>
           </div>
       </div>
   </div>
@endsection