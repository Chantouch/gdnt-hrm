<table class="table table-bordered">
    @if(count($occupations))
        <tr>
            <th width="20px">#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th width="100px" class="text-center">Action</th>
        </tr>
        @foreach ($occupations as $key => $occupation)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $occupation->name }}</td>
                <td>{{ $occupation->description }}</td>
                <td>
                    @if($occupation->status == '1')
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">Disabled</span>
                    @endif
                </td>
                <td class="text-center">
                    {!! Form::open(['route' => ['admin.modules.occupations.destroy', $occupation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.modules.occupations.show', [$occupation->id]) !!}"
                           class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admin.modules.occupations.edit', [$occupation->id]) !!}"
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
{!! $occupations->render() !!}