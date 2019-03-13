<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booking->id !!}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{!! $booking->customer_id !!}</p>
</div>

<!-- Package Id Field -->
<div class="form-group">
    {!! Form::label('package_id', 'Package Id:') !!}
    <p>{!! $booking->package_id !!}</p>
</div>

<!-- Booking Date Field -->
<div class="form-group">
    {!! Form::label('booking_date', 'Booking Date:') !!}
    <p>{!! $booking->booking_date !!}</p>
</div>

<!-- Pickup Time Field -->
<div class="form-group">
    {!! Form::label('pickup_time', 'Pickup Time:') !!}
    <p>{!! $booking->pickup_time !!}</p>
</div>

<!-- Dropoff Time Field -->
<div class="form-group">
    {!! Form::label('dropoff_time', 'Dropoff Time:') !!}
    <p>{!! $booking->dropoff_time !!}</p>
</div>

<!-- Pickup Address Field -->
<div class="form-group">
    {!! Form::label('pickup_address', 'Pickup Address:') !!}
    <p>{!! $booking->pickup_address !!}</p>
</div>

<!-- Dropoff Address Field -->
<div class="form-group">
    {!! Form::label('dropoff_address', 'Dropoff Address:') !!}
    <p>{!! $booking->dropoff_address !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $booking->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $booking->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $booking->deleted_at !!}</p>
</div>

