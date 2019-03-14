<table class="table table-responsive" id="bookings">
    <thead>
        <tr>
            <th>Customer</th>
            <th>Package</th>
            <th>Booking Date</th>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
        <tr>
            <td>{!! $booking->customer->f_name !!}</td>
            <td>{!! $booking->package->name !!}</td>
            <td>{!! \Carbon\Carbon::parse($booking->booking_date)->diffForHumans() !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>