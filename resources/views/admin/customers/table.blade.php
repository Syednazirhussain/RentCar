<table class="table table-responsive" id="customers">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customers)
        <tr>
            <td>{!! $customers->f_name.' '.$customers->l_name !!}</td>
            <td>{!! $customers->email !!}</td>
            <td>{!! $customers->phone !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.customers.destroy', $customers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.customers.edit', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>