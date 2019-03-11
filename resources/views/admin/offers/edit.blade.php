@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Offers
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($offers, ['route' => ['admin.offers.update', $offers->id], 'method' => 'patch']) !!}

                        @include('admin.offers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection