<table class="table table-responsive" id="vehicles">
    <thead>
        <tr>
            <th>Name</th>
            <th>Vehicle Number</th>
            <th>Model</th>
            <th>Vehicle Type</th>
            <th>Vendor</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $vehicles)
        <tr>
            <td>{!! $vehicles->name !!}</td>
            <td>{!! $vehicles->vehicle_number !!}</td>
            <td>{!! $vehicles->model !!}</td>
            <td>{!! $vehicles->vendor->name !!}</td>
            <td>{!! $vehicles->vehicleType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.vehicles.destroy', $vehicles->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.vehicles.edit', [$vehicles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>