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
                    <form action="{{ route('admin.bookings.store') }}" method="POST">
                        @include('admin.bookings.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
