@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vehicles
        </h1>
    </section>
    <div class="content">
        @include('include.messages')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data">
                        @include('admin.vehicles.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
