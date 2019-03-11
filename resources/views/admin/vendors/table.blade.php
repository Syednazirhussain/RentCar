<table class="table table-responsive" id="vendors">
    <thead>
        <tr>
            <th>Name</th>
            <th width="15%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vendors as $vendor)
        <tr>
            <td>{!! $vendor->name !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.vendors.destroy', $vendor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.vendors.edit', [$vendor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>