<table class="table table-responsive" id="services">
    <thead>
        <tr>
            <th>Image</th>
            <th width="70%%">Title</th>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $services)
        <tr>
            <td>
                @if($services->image != null)
                <img class="img-thumbnail" src="<?php echo asset("storage/services/".$services->image); ?>" style="width: 75px; height:75px;"> 
                @else
                <img class="img-thumbnail" src="<?php echo asset("storage/default.png"); ?>" style="width: 75px; height:75px;"> 
                @endif
            </td>
            <td>{!! $services->title !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.services.destroy', $services->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.services.edit', [$services->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>