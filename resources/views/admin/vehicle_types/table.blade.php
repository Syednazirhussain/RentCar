<table class="table table-responsive" id="vehicle_types">
    <thead>
        <tr>
            <th width="18%">Logo</th>
            <th>Name</th>
            <th width="15%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicleTypes as $vehicleType)
        <tr>
            <td>
                <a href="{{ route('admin.vehicleTypes.show',$vehicleType->id) }}">
                @if($vehicleType->logo != null)
                <img class="img-thumbnail" src="<?php echo asset("storage/vendors/".$vehicleType->logo); ?>" style="width: 75px; height:75px;"> 
                @else
                <img class="img-thumbnail" src="<?php echo asset("storage/vendors/default.png"); ?>" style="width: 75px; height:75px;"> 
                @endif
                </a>
            </td>
            <td>{!! $vehicleType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.vehicleTypes.destroy', $vehicleType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.vehicleTypes.edit', [$vehicleType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>