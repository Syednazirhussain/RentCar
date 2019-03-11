<table class="table table-responsive" id="generalInformations-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Short Name</th>
        <th>Title</th>
        <th>Title Description</th>
        <th>About Description</th>
        <th>Logo</th>
        <th>Footer Description</th>
        <th>Helpline</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Email</th>
        <th>Instagram</th>
        <th>Pinterest</th>
        <th>Twitter</th>
        <th>Youtube</th>
        <th>Linkdin</th>
        <th>Facebook</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($generalInformations as $generalInformation)
        <tr>
            <td>{!! $generalInformation->name !!}</td>
            <td>{!! $generalInformation->short_name !!}</td>
            <td>{!! $generalInformation->title !!}</td>
            <td>{!! $generalInformation->title_description !!}</td>
            <td>{!! $generalInformation->about_description !!}</td>
            <td>{!! $generalInformation->logo !!}</td>
            <td>{!! $generalInformation->footer_description !!}</td>
            <td>{!! $generalInformation->helpline !!}</td>
            <td>{!! $generalInformation->contact !!}</td>
            <td>{!! $generalInformation->address !!}</td>
            <td>{!! $generalInformation->email !!}</td>
            <td>{!! $generalInformation->instagram !!}</td>
            <td>{!! $generalInformation->pinterest !!}</td>
            <td>{!! $generalInformation->twitter !!}</td>
            <td>{!! $generalInformation->youtube !!}</td>
            <td>{!! $generalInformation->linkdin !!}</td>
            <td>{!! $generalInformation->facebook !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.generalInformations.destroy', $generalInformation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.generalInformations.show', [$generalInformation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.generalInformations.edit', [$generalInformation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>