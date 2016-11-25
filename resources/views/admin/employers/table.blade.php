<table class="table table-bordered">
    @if(count($departments))
        <tr>
            <th width="20px">#</th>
            <th>Name</th>
            <th>Ministry</th>
            <th>Description</th>
            <th>Status</th>
            <th width="100px" class="text-center">Action</th>
        </tr>
        @foreach ($departments as $key => $department)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ $department->ministry->name }}</td>
                <td>{{ $department->description }}</td>
                <td>
                    @if($department->status == '1')
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">Disabled</span>
                    @endif
                </td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.modules.departments.destroy', $department->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.modules.departments.show', [$department->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admin.modules.departments.edit', [$department->id]) !!}"
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
{!! $departments->render() !!}