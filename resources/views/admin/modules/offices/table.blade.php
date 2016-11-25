<table class="table table-bordered">
    @if(count($offices))
        <tr>
            <th width="20px">#</th>
            <th>Name</th>
            <th>Department unit</th>
            <th>Description</th>
            <th>Status</th>
            <th width="100px" class="text-center">Action</th>
        </tr>
        @foreach ($offices as $key => $office)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $office->name }}</td>
                <td>{{ $office->departmentUnit->name }}</td>
                <td>{{ $office->description }}</td>
                <td>
                    @if($office->status == '1')
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">Disabled</span>
                    @endif
                </td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.modules.offices.destroy', $office->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.modules.offices.show', [$office->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admin.modules.offices.edit', [$office->id]) !!}"
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
{!! $offices->render() !!}