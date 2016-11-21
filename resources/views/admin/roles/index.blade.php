@extends('layouts.gdnt')
@section('title', 'User list')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="pull-left">
                    <h4 class="m-t-0 header-title"><b>Roles</b></h4>
                    <p class="text-muted font-13">
                        Role for staff that can be access to the system
                    </p>
                </div>

                <div class="pull-right">
                    @if(Entrust::hasRole('admin'))
                        <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Create New Role</a>
                    @endif
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
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->display_name }}</td>
                            <td>{{ $role->description }}</td>
                            <td class="text-center">
                                {{--<a class="btn btn-info" href="{{ route('admin.roles.show',$role->id) }}">Show</a>--}}
                                {{--@permission('role-edit')--}}
                                {{--<a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">Edit</a>--}}
                                {{--@endpermission--}}
                                {{--@permission('role-delete')--}}
                                {{--{!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}--}}
                                {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                                {{--@endpermission--}}

                                {!! Form::open(['route' => ['admin.roles.destroy', $role->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.roles.show', [$role->id]) !!}" class='btn btn-default btn-xs'>
                                        <i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{!! route('admin.roles.edit', [$role->id]) !!}" class='btn btn-default btn-xs'>
                                        <i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {!! $roles->render() !!}
            </div>
        </div>
    </div>
@stop