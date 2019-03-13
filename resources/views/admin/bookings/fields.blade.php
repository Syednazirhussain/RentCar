<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_id', 'Package Id:') !!}
    {!! Form::number('package_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Booking Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_date', 'Booking Date:') !!}
    {!! Form::date('booking_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Pickup Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pickup_time', 'Pickup Time:') !!}
    {!! Form::text('pickup_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Dropoff Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dropoff_time', 'Dropoff Time:') !!}
    {!! Form::text('dropoff_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Pickup Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pickup_address', 'Pickup Address:') !!}
    {!! Form::text('pickup_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Dropoff Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dropoff_address', 'Dropoff Address:') !!}
    {!! Form::text('dropoff_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
