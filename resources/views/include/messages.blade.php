@if ($errors->any())
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>&#40;{{ count($errors->all()) }}&#41;&nbsp;Error's&nbsp;<i class="icon fa fa-ban"></i></h4>
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
@endif

@if (Session::has('msg.error'))
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><i class="icon fa fa-ban"></i> Error</h4>
		{{ Session::get('msg.error') }}
	</div>
@endif

@if (Session::has('msg.success'))
	<div class="alert alert-success alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-check"></i> Success</h4>
		{{ Session::get('msg.success') }}
	</div>
@endif