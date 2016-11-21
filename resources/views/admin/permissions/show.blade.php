@extends('layouts.gdnt')
@section('title', 'User list')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="pull-left">
                    <h4 class="m-t-0 header-title"><b>Show permission: <strong>{!! $permission->display_name !!}</strong></b></h4>
                    <p class="text-muted font-13">
                        Permission for staff that can be access to the system
                    </p>
                </div>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.roles.index') }}"> Back</a>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $permission->display_name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $permission->description }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop