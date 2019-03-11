<table class="table table-responsive" id="pages">
    <thead>
        <tr>
            <th>Name</th>
            <th width="70%">Short Code</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pages as $pages)
        <tr>
            <td>{!! $pages->name !!}</td>
            <td>{!! $pages->short_code !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.pages.destroy', $pages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.pages.edit', [$pages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>