@section('css')

<style type="text/css">
    .fileinput .thumbnail>img {
        width: 150px;
        height: 150px;
    }
</style>

@endsection

<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if (isset($vehicleType))
	<input type="hidden" name="_method" value="PUT">
@endif



<div class="col-sm-12 col-md-6 col-md-offset-3">
	<div class="col-md-12">
	  <div class="form-group">
	    <div class="fileinput fileinput-new" data-provides="fileinput">
	      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
	            @if (isset($vehicleType))
	              @if($vehicleType->logo != null)
	                <input type="hidden" name="image" id="logo-hidden" value="{{ $vehicleType->logo }}">
	                <img src="{{ asset('storage/vendors/'.$vehicleType->logo ) }}" data-src="{{ asset('storage/vendors/'.$vehicleType->logo) }}" alt="{{ $vehicleType->name}}" />
	              @else
	                <img src="{{ asset('storage/users/default.png') }}" alt="{{ $vehicleType->name}}"/>
	              @endif
	            @else
	                <img src="{{ asset('storage/users/default.png') }}" alt="user"/>
	            @endif
	      </div>
	      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
	      <div>
	        <span class="btn btn-default btn-file">
	            <span class="fileinput-new">Select image</span>
	            <span class="fileinput-exists">Change</span>
	        <input type="file" name="logo"></span>
	        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-md-12">
	  <div class="form-group">
	      <label for="title">Name</label>
	      <input type="text" name="name" class="form-control" value="@if(isset($vehicleType)){{ $vehicleType->name }}@endif">
	  </div>
	</div>

	<div class="col-md-12">
	  <button type="submit" class="btn btn-primary">@if(isset($vehicleType)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Package @endif</button>
	  <a href="{!! route('admin.vehicleTypes.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
	</div>
</div>



