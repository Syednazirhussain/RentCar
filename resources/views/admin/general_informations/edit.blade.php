@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            General Information
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($generalInformation, ['route' => ['admin.generalInformations.update', $generalInformation->id], 'method' => 'patch']) !!}

                        @include('admin.general_informations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection