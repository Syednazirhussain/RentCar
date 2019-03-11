<table class="table table-responsive" id="vehicleSpecification">
    <thead>
        <tr>
            <th>Name</th>
            <th width="15%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicleSpecifications as $vehicleSpecification)
        <tr>
            <td>{!! $vehicleSpecification->name !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.vehicleSpecifications.destroy', $vehicleSpecification->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.vehicleSpecifications.edit', [$vehicleSpecification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>