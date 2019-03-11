@extends('admin.default')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Offers</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.offers.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('include.messages')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.offers.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

@section('js')

<script type="text/javascript">
    $('#offers').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
</script>

@endsection

