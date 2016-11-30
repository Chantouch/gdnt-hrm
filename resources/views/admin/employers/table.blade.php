<table class="table table-bordered">
    @if(count($employers))
        <tr>
            <th width="20px">#</th>
            <th>Name</th>
            <th>Latin</th>
            <th>ID Card</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Nation</th>
            <th>POB</th>
            <th>Status</th>
            <th width="100px" class="text-center">Action</th>
        </tr>
        @foreach ($employers as $key => $employer)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                    @if(!$employer->name == "" || !$employer->name == null)
                        <span>{{ $employer->name }}</span>
                    @else
                        <span>{{ $employer->full_name }}</span>
                    @endif
                </td>
                <td>{{ $employer->fn_en }}</td>
                <td>{{ $employer->id_card }}</td>
                <td>{{ $employer->email }}</td>
                <td>{{ $employer->dob }}</td>
                <td>{{ $employer->hand_phone }}</td>
                <td>
                    @if($employer->gender == 'm')
                        <span>Male</span>
                    @elseif($employer=='f')
                        <span>Female</span>
                    @else
                        <span>Others</span>
                    @endif
                </td>
                <td>{!! $employer->nationality !!}</td>
                <td>{!! $employer->place_of_birth !!}</td>
                <td>
                    @if($employer->active == '1')
                        <span class="label label-success">Verified</span>
                    @else
                        <span class="label label-danger">Not verify</span>
                    @endif
                </td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.managements.employers.destroy', $employer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.managements.employers.show', [$employer->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admin.managements.employers.edit-emp', [$employer->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <th colspan="12">
                <span>There is no data here.</span>
            </th>
        </tr>
    @endif
</table>
{!! $employers->render() !!}