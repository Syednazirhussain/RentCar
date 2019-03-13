@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Customers
        </h1>
   </section>
   <div class="content">
        @include('include.messages')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    <form action="{{ route('admin.customers.update', [$customers->id]) }}" method="POST"  enctype="multipart/form-data">
                        @include('admin.customers.fields')
                    </form>
               </div>
           </div>
       </div>
   </div>
@endsection