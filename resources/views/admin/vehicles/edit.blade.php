@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vehicles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  <form action="{{ route('admin.vehicles.update', [$vehicles->id]) }}" method="POST" enctype="multipart/form-data">
                    @include('admin.vehicles.fields')
                  </form>
               </div>
           </div>
       </div>
   </div>
@endsection