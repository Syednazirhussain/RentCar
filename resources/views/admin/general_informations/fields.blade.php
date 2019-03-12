

<div class="col-sm-12 col-md-12">

    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                @if (isset($generalInformations))
                  @if($generalInformations['logo'] != null)
                    <input type="hidden" name="image" id="logo-hidden" value="{{ $generalInformations['logo'] }}">
                    <img src="{{ asset('storage/'.$generalInformations['logo'] ) }}" data-src="{{ asset('storage/'.$generalInformations['logo']) }}" alt="{{ $generalInformations['name'] }}" />
                  @else
                    <img src="{{ asset('storage/image.png') }}" alt="{{ $generalInformations['name'] }}"/>
                  @endif
                @else
                    <img src="{{ asset('storage/image.png') }}" alt="user"/>
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
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Site Name</label>
          <input type="text" name="name" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['name'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Short Name</label>
          <input type="text" name="short_name" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['short_name'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" name="title" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['title'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Helpline</label>
          <input type="text" name="helpline" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['helpline'] }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Contact</label>
          <input type="text" name="contact" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['contact'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Email</label>
          <input type="text" name="email" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['email'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Instagram</label>
          <input type="text" name="instagram" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['instagram'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Pinterest</label>
          <input type="text" name="pinterest" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['pinterest'] }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Twitter</label>
          <input type="text" name="twitter" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['twitter'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Youtube</label>
          <input type="text" name="youtube" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['youtube'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Linkdin</label>
          <input type="text" name="linkdin" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($generalInformations)){{ $generalInformations['linkdin'] }}@endif">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
          <label for="name">Facebook</label>
          <input type="text" name="facebook" class="form-control" placeholder="ex. 50/km" value="@if(isset($generalInformations)){{ $generalInformations['facebook'] }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="box-body pad">
        <label for="name">About Description</label>
        <textarea class="textarea" name="about_description" placeholder="Place some text here"
      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($generalInformations)){{ $generalInformations['about_description'] }}@endif</textarea>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="box-body pad">
        <label for="name">Footer Description</label>
        <textarea class="textarea" name="footer_description" placeholder="Place some text here"
      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($generalInformations)){{ $generalInformations['footer_description'] }}@endif</textarea>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary"> <i class="fa fa-refresh"></i>  Update</button>
        <a href="{!! route('admin.dashboard') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>


@section('js')

<script type="text/javascript">
  
  $(function () {
    $('.textarea').wysihtml5({
        toolbar: {
            "image": false
        }
    });
  });

</script>

@endsection