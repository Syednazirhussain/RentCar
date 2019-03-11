<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($offers))
    <input name="_method" type="hidden" value="PATCH">
@endif

<div class="row">

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="ex. Rent a car for wedding" value="@if(isset($offers)){{ $offers->name }}@endif">
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
              <label for="name">Description</label>
              <textarea class="form-control" name="description" cols="8" rows="6" style="resize: none;">@if(isset($offers)){{ $offers->description }}@endif</textarea>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
              	<label for="">Summery</label>
                <textarea id="summery" name="summery">@if(isset($offers)){{ $offers->summery }}@endif</textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">@if(isset($offers)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Offer @endif</button>
            <a href="{!! route('admin.offers.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
        </div>
    </div>


  </div>
</div>

@section('js')

<script type="text/javascript">

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('summery', {
        resize_enabled : false
    })
  });

</script>

@endsection

