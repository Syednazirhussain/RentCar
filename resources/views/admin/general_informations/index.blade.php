@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            General Information
        </h1>
   </section>
   <div class="content">
       @include('include.messages')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    <form action="{{ route('admin.generalInformations.index') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('admin.general_informations.fields')
                    </form>
               </div>
           </div>
       </div>
   </div>
@endsection

