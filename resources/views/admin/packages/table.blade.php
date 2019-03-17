<table class="table table-responsive" id="packages">
    <thead>
        <tr>
            <th>Name</th>
            <th>Vehicle</th>
            <th>Package Overtime Rate</th>
            <th>Package Rate</th>
            <th>Package Extra Fuel</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packages as $packages)
        <tr>
            <td>{!! $packages->name !!}</td>
            <td>{!! $packages->vehicle->name !!}</td>
            <td>{!! $packages->package_overtime_rate !!}</td>
            <td>{!! $packages->package_rate !!}</td>
            <td>{!! $packages->package_extra_fuel !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.packages.destroy', $packages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.packages.edit', [$packages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>