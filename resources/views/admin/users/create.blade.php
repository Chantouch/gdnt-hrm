@extends('layouts.gdnt')
@section('title', 'Create new user')

@section('specific_css')
    <link href="{!! asset('assets/plugins/select2/select2.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') !!}" rel="stylesheet"/>
@stop

@section('specific_style')
    <style>
        .select2-container-multi .select2-choices .select2-search-field input {
            padding: 7px 12px !important;
        }
    </style>
@stop

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">GDNT HRM</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">GDNT</a>
                </li>
                <li>
                    <a href="#">System</a>
                </li>
                <li class="active">
                    Edit Role
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Add New User</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">

                        {!! Form::open(array('route' => 'admin.users.store','method'=>'POST')) !!}

                        @include('admin.users.fields')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('specific_js')
    <script src="{!! asset('assets/plugins/select2/select2.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') !!}"
            type="text/javascript"></script>
@stop

@section('specific_script')
    <script>
        jQuery(document).ready(function () {
            $('#roles').select2();
        })
    </script>
@stop