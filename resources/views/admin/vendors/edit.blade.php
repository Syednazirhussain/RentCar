@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vendor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vendor, ['route' => ['admin.vendors.update', $vendor->id], 'method' => 'patch']) !!}

                        @include('admin.vendors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection