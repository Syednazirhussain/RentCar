@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            General Information
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.general_informations.show_fields')
                    <a href="{!! route('admin.generalInformations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
