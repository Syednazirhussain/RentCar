<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($booking))
    <input name="_method" type="hidden" value="PATCH">
@endif



<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
            <label>Customer</label>
            <select class="form-control select2" name="customer_id" style="width: 100%;">
                @if (isset($customers))
                    @if (isset($booking))
                        @foreach($customers as $customer)
                            @if ($booking->customer_id == $customer->id) 
                                <option value="{{ $customer->id }}" selected="selected">{{ $customer->f_name }}</option>
                            @else
                                <option value="{{ $customer->id }}">{{ $customer->f_name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->f_name }}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Vehicle</label>
            <select class="form-control select2" name="vehicle_id" style="width: 100%;">
                @if (isset($vehicles))
                    @if (isset($booking))
                        @foreach($vehicles as $vehicle)
                            @if ($booking->vehicle_id == $vehicle->id) 
                                <option value="{{ $vehicle->id }}" selected="selected">{{ $vehicle->name }}</option>
                            @else
                                <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($vehicles as $vehicle)
                            <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
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
                <input type="text" name="booking_date" value="@if(isset($booking)){{ $booking->booking_date }}@else{{old('booking_date')}}@endif" id="booking_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Pickup Time</label>
            <div class="input-group bootstrap-timepicker">
                <input type="text" name="pickup_time" value="@if(isset($booking)){{ $booking->pickup_time }}@endif" id="pickup_time" class="form-control" readonly="readonly">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>DropOff Time</label>
            <div class="input-group bootstrap-timepicker">
                <input type="text" name="dropoff_time" value="@if(isset($booking)){{ $booking->dropoff_time }}@else{{old('dropoff_time')}}@endif" id="dropoff_time"  class="form-control" readonly="readonly">
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
            <textarea name="pickup_address" id="pickup_address" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($booking)){{ $booking->pickup_address }}@else{{old('pickup_address')}}@endif</textarea>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <div class="form-group">
          <label>Dropoff Adress</label>
            <textarea name="dropoff_address" id="dropoff_address" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($booking)){{ $booking->dropoff_address }}@else{{old('dropoff_address')}}@endif</textarea>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">@if(isset($booking)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Booking @endif</button>
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

