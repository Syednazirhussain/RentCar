<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $packages->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $packages->name !!}</p>
</div>

<!-- Package Start Time Field -->
<div class="form-group">
    {!! Form::label('package_start_time', 'Package Start Time:') !!}
    <p>{!! $packages->package_start_time !!}</p>
</div>

<!-- Package End Time Field -->
<div class="form-group">
    {!! Form::label('package_end_time', 'Package End Time:') !!}
    <p>{!! $packages->package_end_time !!}</p>
</div>

<!-- Package Overtime Rate Field -->
<div class="form-group">
    {!! Form::label('package_overtime_rate', 'Package Overtime Rate:') !!}
    <p>{!! $packages->package_overtime_rate !!}</p>
</div>

<!-- Package Rate Field -->
<div class="form-group">
    {!! Form::label('package_rate', 'Package Rate:') !!}
    <p>{!! $packages->package_rate !!}</p>
</div>

<!-- Package Extra Fuel Field -->
<div class="form-group">
    {!! Form::label('package_extra_fuel', 'Package Extra Fuel:') !!}
    <p>{!! $packages->package_extra_fuel !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $packages->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $packages->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $packages->deleted_at !!}</p>
</div>

