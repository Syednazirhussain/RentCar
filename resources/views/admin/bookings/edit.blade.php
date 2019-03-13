@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Booking
        </h1>
   </section>
   <div class="content">
       @include('include.messages')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($booking, ['route' => ['admin.bookings.update', $booking->id], 'method' => 'patch']) !!}

                        @include('admin.bookings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection