<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if (isset($vendor))
	<input type="hidden" name="_method" value="PUT">
@endif



<div class="col-sm-12 col-md-6 col-md-offset-3">
	
	<div class="col-md-12">
	  <div class="form-group">
	      <label for="title">Name</label>
	      <input type="text" name="name" class="form-control" value="@if(isset($vendor)){{ $vendor->name }}@else {{ old('name') }} @endif">
	  </div>
	</div>

	<div class="col-md-12">
	  <button type="submit" class="btn btn-primary">@if(isset($vendor)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Type @endif</button>
	  <a href="{!! route('admin.vendors.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
	</div>

</div>


