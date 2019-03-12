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
                    {!! Form::open(['route' => 'admin.customers.store']) !!}

                        @include('admin.customers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
