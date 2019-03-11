@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Packages
        </h1>
   </section>
   <div class="content">
        @include('include.messages')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($packages, ['route' => ['admin.packages.update', $packages->id], 'method' => 'patch']) !!}

                        @include('admin.packages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection