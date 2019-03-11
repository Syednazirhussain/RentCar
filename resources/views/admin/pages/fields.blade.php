<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($pages))
    <input name="_method" type="hidden" value="PATCH">
@endif

<div class="row">

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="ex. About" value="@if(isset($pages)){{ $pages->name }}@endif">
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Description</label>
                <textarea class="textarea" name="description" id="description" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($pages)){{ $pages->description }}@endif</textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Summery</label>
                <textarea id="summery" name="summery" rows="10" cols="80">@if(isset($pages)){{ $pages->summery }}@endif</textarea>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-md-12">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">@if(isset($pages)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Page @endif</button>
            <a href="{!! route('admin.pages.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
        </div>
    </div>


  </div>
</div>

@section('js')

<script type="text/javascript">


    CKEDITOR.replace('summery',         
        {
            height: '200',
            resize_enabled : false,
            toolbar:  'Basic',
        });

    $('#description').wysihtml5();

</script>

@endsection

