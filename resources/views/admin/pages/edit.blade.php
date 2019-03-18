@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Pages
        </h1>
   </section>
   <div class="content">
        @include('include.messages')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($page, ['route' => ['admin.page.update', $page->id], 'method' => 'POST']) !!}

                        @include('admin.pages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection