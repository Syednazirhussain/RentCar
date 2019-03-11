@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vehicle Specification
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vehicleSpecification, ['route' => ['admin.vehicleSpecifications.update', $vehicleSpecification->id], 'method' => 'patch']) !!}

                        @include('admin.vehicle_specifications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection