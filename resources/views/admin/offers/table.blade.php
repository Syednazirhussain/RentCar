<table class="table table-responsive" id="offers">
    <thead>
        <tr>
            <th>Name</th>
            <th width="80%">Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($offers as $offers)
        <tr>
            <td>{!! $offers->name !!}</td>
            <td>{!! $offers->description !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.offers.destroy', $offers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.offers.edit', [$offers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>