<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($packages))
    <input name="_method" type="hidden" value="PATCH">
@endif



<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
            <label>Customer</label>
            <select class="form-control select2" name="vendor_id" style="width: 100%;">
                @if (isset($vehicleTypes))
                    @if (isset($vehicles))
                        @foreach($vehicleTypes as $vehicleType)
                            @if ($vehicles->vehicle_type_id == $vehicleType->id) 
                                <option value="{{ $vehicleType->id }}" selected="selected">{{ $vehicleType->name }}</option>
                            @else
                                <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($vehicleTypes as $vehicleType)
                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Package</label>
            <select class="form-control select2" name="vendor_id" style="width: 100%;">
                @if (isset($vehicleTypes))
                    @if (isset($vehicles))
                        @foreach($vehicleTypes as $vehicleType)
                            @if ($vehicles->vehicle_type_id == $vehicleType->id) 
                                <option value="{{ $vehicleType->id }}" selected="selected">{{ $vehicleType->name }}</option>
                            @else
                                <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($vehicleTypes as $vehicleType)
                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-4">
        <div class="form-group">
            <label>Booking Date</label>
            <div class="input-group">
                <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="booking_date" id="booking_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Pickup Time</label>
            <div class="input-group bootstrap-timepicker">
                <input type="text" name="pickup_time" id="pickup_time" class="form-control" readonly="readonly">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Pickup Time</label>
            <div class="input-group bootstrap-timepicker">
                <input type="text" name="dropoff_time" id="dropoff_time"  class="form-control" readonly="readonly">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <div class="form-group">
          <label>Pickup Address</label>
            <textarea name="pickup_address" id="pickup_address" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($vehicles)){{ $vehicles->name }}@endif</textarea>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <div class="form-group">
          <label>Dropoff Adress</label>
            <textarea name="dropoff_address" id="dropoff_address" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($vehicles)){{ $vehicles->name }}@endif</textarea>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">@if(isset($packages)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Booking @endif</button>
        <a href="{!! route('admin.bookings.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>


@section('js')

<script type="text/javascript">

    //Initialize Select2 Elements
    $('.select2').select2();

    //bootstrap WYSIHTML5 - text editor
    $('#pickup_address').wysihtml5({
        toolbar: {
            "font-styles": true,
            "emphasis": true,
            "lists": true,
            "html": false,
            "link": false,
            "image": false,
            "color": false,
            "blockquote": false
        }
    });

    //bootstrap WYSIHTML5 - text editor
    $('#dropoff_address').wysihtml5({
        toolbar: {
            "font-styles": true,
            "emphasis": true,
            "lists": true,
            "html": false,
            "link": false,
            "image": false,
            "color": false,
            "blockquote": false
        }
    });

    //Timepicker
    $('#pickup_time').timepicker({
      //showInputs: false
    });

    $('#dropoff_time').timepicker({
      //showInputs: false
    });

    $('#booking_date').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: true,
        showDropdowns: true,
        minDate: new Date(),
        disabledDates: [new Date()],
        startDate : moment().add('day',1),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

</script>

@endsection

