@extends('layouts.gdnt')
@section('title', "$occupation->name")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <div class="pull-left">
                    <h4 class="m-t-0 header-title"><b> Show ministry: <strong>{!! $occupation->name !!}</strong></b>
                    </h4>
                    <p class="text-muted font-13">
                        Role for staff that can be access to the system
                    </p>
                </div>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.modules.occupations.index') }}"> Back</a>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $occupation->name }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $occupation->description }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status:</strong>
                            @if($occupation->status == '1')
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-danger">Disable</span>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop