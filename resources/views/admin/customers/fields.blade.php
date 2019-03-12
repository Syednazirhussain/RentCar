<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($packages))
    <input name="_method" type="hidden" value="PATCH">
@endif



<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="f_name">First Name</label>
          <input type="text" name="f_name" class="form-control" placeholder="ex. John" value="@if(isset($packages)){{ $packages->name }}@endif">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="l_name">Last Name</label>
          <input type="text" name="l_name" class="form-control" placeholder="ex. Doe" value="@if(isset($packages)){{ $packages->package_rate }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="nic">Nic</label>
          <input type="text" name="nic" class="form-control" placeholder="ex. 4xxxx-xxxxxxx-x" value="@if(isset($packages)){{ $packages->name }}@endif">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="ex. 03xxxxxxxxx" value="@if(isset($packages)){{ $packages->package_rate }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nic_front_image">Nic Front Image</label>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    @if (isset($vehicleType))
                      @if($vehicleType->nic_front_image != null)
                        <input type="hidden" name="image" id="logo-hidden" value="{{ $vehicleType->nic_front_image }}">
                        <img src="{{ asset('storage/vendors/'.$vehicleType->nic_front_image ) }}" data-src="{{ asset('storage/vendors/'.$vehicleType->nic_front_image) }}" alt="{{ $vehicleType->f_name }}" />
                      @else
                        <img src="{{ asset('storage/users/default.png') }}" alt="{{ $vehicleType->f_name }}"/>
                      @endif
                    @else
                        <img src="{{ asset('storage/image.png') }}" alt="user"/>
                    @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                </div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                <input type="file" name="nic_front_image"></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nic_back_image">Nic Back Image</label>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    @if (isset($vehicleType))
                      @if($vehicleType->nic_back_image != null)
                        <input type="hidden" name="image" id="logo-hidden" value="{{ $vehicleType->nic_back_image }}">
                        <img src="{{ asset('storage/vendors/'.$vehicleType->nic_back_image ) }}" data-src="{{ asset('storage/vendors/'.$vehicleType->nic_back_image) }}" alt="{{ $vehicleType->name}}" />
                      @else
                        <img src="{{ asset('storage/users/default.png') }}" alt="{{ $vehicleType->name}}"/>
                      @endif
                    @else
                        <img src="{{ asset('storage/image.png') }}" alt="user"/>
                    @endif
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                </div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                <input type="file" name="nic_back_image"></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control" placeholder="ex. john@doe.com" value="@if(isset($packages)){{ $packages->name }}@endif">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control" value="@if(isset($packages)){{ $packages->package_rate }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">@if(isset($packages)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Customer @endif</button>
        <a href="{!! route('admin.customers.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>



