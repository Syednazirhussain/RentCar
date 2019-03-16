<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($packages))
    <input name="_method" type="hidden" value="PATCH">
@endif



<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" placeholder="ex. Airport pick n drop" value="@if(isset($packages)){{ $packages->name }}@endif">
        </div>
    </div>
<div class="col-md-6">
        <div class="form-group">
          <label for="name">Package Rate</label>
          <input type="text" name="package_rate" class="form-control" placeholder="ex. 50/km" value="@if(isset($packages)){{ $packages->package_rate }}@endif">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Package Start Date</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" name="package_start_time" id="start_date" value="@if(isset($packages)){{ $packages->package_start_time }}@endif">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Package End Date</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" name="package_end_time" id="end_date" value="@if(isset($packages)){{ $packages->package_end_time }}@endif">
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Package Overtime Rate</label>
          <input type="text" name="package_overtime_rate" class="form-control" placeholder="ex. 500/hr." value="@if(isset($packages)){{ $packages->package_overtime_rate }}@endif">
        </div>
    </div>
<div class="col-md-6">
        <div class="form-group">
          <label for="name">Package Extra Fuel</label>
          <input type="text" name="package_extra_fuel" class="form-control" placeholder="ex. 200/km" value="@if(isset($packages)){{ $packages->package_extra_fuel }}@endif">
        </div>
    </div>
</div>


<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">@if(isset($packages)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Package @endif</button>
        <a href="{!! route('admin.packages.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>


@section('js')

<script type="text/javascript">

    var package_id = '{{ (isset($packages)) ? $packages->id : 0 }}';

    if (package_id != 0) {

        let start_date, end_date;

        start_date =  '{{ (isset($packages)) ? $packages->package_start_time : 'YYYY-MM-DD' }}';
        end_date =  '{{ (isset($packages)) ? $packages->package_end_time : 'YYYY-MM-DD' }}';

        $('#start_date').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 10,
            autoUpdateInput: true,
            showDropdowns: true,
            minDate: start_date,
            // disabledDates: [new Date()],
            // startDate : moment(),
            locale: {
                format: 'YYYY-MM-DD HH:mm'
            }
        });

        $('#end_date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 10,
            autoUpdateInput: true,
            showDropdowns: true,
            minDate: end_date,
            // disabledDates: [new Date()],
            // startDate : moment().add('day',1),
            locale: {
                format: 'YYYY-MM-DD HH:mm'
            }
        });
    } else {  

        $('#start_date').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 10,
            autoUpdateInput: true,
            showDropdowns: true,
            startDate : moment(),
            minDate: new Date(),
            disabledDates: [new Date()],
            locale: {
                format: 'YYYY-MM-DD HH:mm'
            }
        });

        $('#end_date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 10,
            autoUpdateInput: true,
            showDropdowns: true,
            minDate: new Date(),
            disabledDates: [new Date()],
            startDate : moment().add('day',1),
            locale: {
                format: 'YYYY-MM-DD HH:mm'
            }
        });
    }


</script>

@endsection
