<!--Custom Toolbar-->
<!--===================================================-->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Staff List</b></h4>
            <p class="text-muted font-13">
                List all staff that added to system
            </p>

            {{--<button id="demo-delete-row" class="btn btn-danger" disabled><i class="fa fa-times m-r-5"></i>Delete--}}
            {{--</button>--}}
            <table data-toggle="table"
                   data-search="true"
                   data-show-refresh="false"
                   data-show-toggle="false"
                   data-show-columns="true"
                   {{--data-sort-name="name"--}}
                   data-pagination="false" data-show-pagination-switch="false" class="table-bordered ">
                <thead>
                <tr>
                    <th>#</th>
                    <th data-field="name" data-sortable="true">Name</th>
                    <th data-field="email" data-sortable="true">Email</th>
                    <th data-field="role" data-sortable="true">Role</th>
                    <th data-field="status" data-align="center" data-sortable="true"
                        data-sorter="status">Status
                    </th>
                    <th data-align="center">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{!! $key + 1 !!}</td>
                        <td>{!!  $user->name !!}</td>
                        <td>{!!  $user->email  !!}</td>
                        <td>
                            @if(!empty($user->roles))
                                @foreach($user->roles as $role)
                                    <label class="label label-success">{!! $role->display_name !!}</label>
                                @endforeach
                            @endif
                        </td>
                        <td><label for="status" class="label label-default">Active</label></td>
                        <td>
                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('admin.users.show', [$user->id]) !!}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-eye-open"></i></a>
                                @if(Entrust::hasRole('system-admin'))
                                    <a href="{!! route('admin.users.edit', [$user->id]) !!}"
                                       class='btn btn-default btn-xs'>
                                        <i class="glyphicon glyphicon-edit"></i></a>
                                    @if(Auth::user()->id != $user->id)
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    @endif
                                @endif
                                @if(Entrust::hasRole('officer'))
                                    @if(Auth::user()->id == $user->id)
                                        <a href="{!! route('admin.users.edit', [$user->id]) !!}"
                                           class='btn btn-default btn-xs'>
                                            <i class="glyphicon glyphicon-edit"></i></a>
                                    @endif
                                @endif
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
