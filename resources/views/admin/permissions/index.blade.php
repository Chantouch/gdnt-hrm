@extends('layouts.gdnt')
@section('title', 'User list')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="pull-left">
                    <h4 class="m-t-0 header-title"><b>Permissions</b></h4>
                    <p class="text-muted font-13">
                        Permission for staff that can be access to the system
                    </p>
                </div>

                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>

                <table class="table table-bordered">
                    <tr>
                        <th width="20px">No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Slug</th>
                        <th width="80px" class="text-center">Action</th>
                    </tr>
                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $permission->display_name }}</td>
                            <td>{{ $permission->description }}</td>
                            <td>
                                {{ $permission->name }}
                                {{--<a class="btn btn-info" href="{{ route('admin.roles.show',$permission->id) }}">Show</a>--}}
                                {{--@permission('role-edit')--}}
                                {{--<a class="btn btn-primary" href="{{ route('admin.roles.edit',$permission->id) }}">Edit</a>--}}
                                {{--@endpermission--}}
                                {{--@permission('role-delete')--}}
                                {{--{!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $permission->id],'style'=>'display:inline']) !!}--}}
                                {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                                {{--@endpermission--}}

                                {{--{!! Form::open(['route' => ['admin.roles.destroy', $permission->id], 'method' => 'delete']) !!}--}}
                                {{--<div class='btn-group'>--}}
                                    {{--<a href="{!! route('admin.roles.show', [$permission->id]) !!}" class='btn btn-default btn-xs'>--}}
                                        {{--<i class="glyphicon glyphicon-eye-open"></i></a>--}}
                                    {{--<a href="{!! route('admin.roles.edit', [$permission->id]) !!}" class='btn btn-default btn-xs'>--}}
                                        {{--<i class="glyphicon glyphicon-edit"></i></a>--}}
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                {{--</div>--}}
                                {{--{!! Form::close() !!}--}}
                            </td>
                            <td class="text-center">
                                {{--{!! Form::open(['route' => ['admin.roles.destroy', $permission->id], 'method' => 'delete']) !!}--}}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.permissions.show', [$permission->id]) !!}"
                                       class='btn btn-default btn-xs'>
                                        <i class="glyphicon glyphicon-eye-open"></i></a>
                                    {{--<a href="{!! route('admin.roles.edit', [$permission->id]) !!}"--}}
                                    {{--class='btn btn-default btn-xs'>--}}
                                    {{--<i class="glyphicon glyphicon-edit"></i></a>--}}
                                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                                </div>
                                {{--{!! Form::close() !!}--}}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {!! $permissions->render() !!}
            </div>
        </div>
    </div>
@stop