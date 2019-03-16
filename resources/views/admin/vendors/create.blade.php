@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1>
            Vehicle Type
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.vendors.store']) !!}

                        @include('admin.vendors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
