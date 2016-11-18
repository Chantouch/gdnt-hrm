<!--Custom Toolbar-->
<!--===================================================-->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Staff List</b></h4>
            <p class="text-muted font-13">
                List all staff that added to system
            </p>

            <button id="demo-delete-row" class="btn btn-danger" disabled><i class="fa fa-times m-r-5"></i>Delete
            </button>
            <table id="demo-custom-toolbar" data-toggle="table"
                   data-toolbar="#demo-delete-row"
                   data-search="true"
                   data-show-refresh="true"
                   data-show-toggle="true"
                   data-show-columns="true"
                   data-sort-name="id"
                   data-page-list="[5, 10, 20]"
                   data-page-size="5"
                   data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="id" data-sortable="true">Name</th>
                    <th data-field="name" data-sortable="true">Email</th>
                    <th data-field="date" data-sortable="true">Role</th>
                    <th data-field="amount" data-align="center" data-sortable="true"
                        data-sorter="priceSorter">Status
                    </th>
                    <th data-align="center">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if(!empty($user->roles))
                                @foreach($user->roles as $v)
                                    <label class="label label-success">{{ $v->display_name }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td><label for="status" class="label label-default">Active</label></td>
                        <td>

                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('admin.users.show', [$user->id]) !!}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{!! route('admin.users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $data->render() !!}
        </div>
    </div>
</div>
