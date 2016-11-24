<table class="table table-bordered">
    <tr>
        <th width="20px">#</th>
        <th>Name</th>
        <th>Department</th>
        <th>Description</th>
        <th>Status</th>
        <th width="100px" class="text-center">Action</th>
    </tr>
    @foreach ($department_units as $key => $department_unit)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $department_unit->name }}</td>
            <td>{{ $department_unit->department->name }}</td>
            <td>{{ $department_unit->description }}</td>
            <td>
                @if($department_unit->status == '1')
                    <span class="label label-success">Active</span>
                @else
                    <span class="label label-default">Disabled</span>
                @endif
            </td>
            <td class="text-center">
                {!! Form::open(['route' => ['admin.modules.department-units.destroy', $department_unit->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.modules.department-units.show', [$department_unit->id]) !!}"
                       class='btn btn-default btn-xs'>
                        <i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.modules.department-units.edit', [$department_unit->id]) !!}"
                       class='btn btn-default btn-xs'>
                        <i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
{!! $department_units->render() !!}