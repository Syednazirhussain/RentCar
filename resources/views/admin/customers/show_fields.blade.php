<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $customers->id !!}</p>
</div>

<!-- F Name Field -->
<div class="form-group">
    {!! Form::label('f_name', 'F Name:') !!}
    <p>{!! $customers->f_name !!}</p>
</div>

<!-- L Name Field -->
<div class="form-group">
    {!! Form::label('l_name', 'L Name:') !!}
    <p>{!! $customers->l_name !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $customers->phone !!}</p>
</div>

<!-- Nic Field -->
<div class="form-group">
    {!! Form::label('nic', 'Nic:') !!}
    <p>{!! $customers->nic !!}</p>
</div>

<!-- Nic Front Image Field -->
<div class="form-group">
    {!! Form::label('nic_front_image', 'Nic Front Image:') !!}
    <p>{!! $customers->nic_front_image !!}</p>
</div>

<!-- Nic Back Image Field -->
<div class="form-group">
    {!! Form::label('nic_back_image', 'Nic Back Image:') !!}
    <p>{!! $customers->nic_back_image !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $customers->password !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $customers->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $customers->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $customers->deleted_at !!}</p>
</div>

