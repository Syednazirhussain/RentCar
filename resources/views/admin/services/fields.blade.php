<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if (isset($services))
	<input type="hidden" name="_method" value="PUT">
@endif



<div class="col-sm-12 col-md-8 col-md-offset-2">
	<div class="col-md-12">
	  <div class="form-group">
	    <div class="fileinput fileinput-new" data-provides="fileinput">
	      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
	            @if (isset($services))
	              @if($services->image != null)
	                <input type="hidden" name="image" id="logo-hidden" value="{{ $services->image }}">
	                <img src="{{ asset('storage/services/'.$services->image ) }}" data-src="{{ asset('storage/services/'.$services->image) }}" alt="{{ $services->title}}" />
	              @else
	                <img src="{{ asset('storage/image.png') }}" alt="{{ $services->title}}"/>
	              @endif
	            @else
	                <img src="{{ asset('storage/image.png') }}" alt="image"/>
	            @endif
	      </div>
	      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
	      <div>
	        <span class="btn btn-default btn-file">
	            <span class="fileinput-new">Select image</span>
	            <span class="fileinput-exists">Change</span>
	        <input type="file" name="image"></span>
	        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-md-12">
	  <div class="form-group">
	      <label for="title">Title</label>
	      <input type="text" name="title" class="form-control" value="@if(isset($services)){{ $services->title }}@else {{ old('title') }} @endif">
	  </div>
	</div>

	<div class="col-md-12">
        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="textarea" name="descriptions" id="descriptions" 
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($services)){{ $services->descriptions }}@else{{old('descriptions')}}@endif</textarea>
        </div>
	</div>

	<div class="col-md-12">
	  <button type="submit" class="btn btn-primary">@if(isset($services)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Service @endif</button>
	  <a href="{!! route('admin.services.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
	</div>
</div>


@section('js')

<script>
	$('#descriptions').wysihtml5({
        toolbar: {
            image: false
        }
    });
</script>

@endsection
