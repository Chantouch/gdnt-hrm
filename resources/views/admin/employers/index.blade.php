@extends('layouts.gdnt')
@section('title', 'Management | Employment')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="pull-left">
                    <h4 class="m-t-0 header-title"><b>Employers</b></h4>
                    <p class="text-muted font-13">
                        Permission for staff that can be access to the system
                    </p>
                </div>
                <div class="pull-right">
                    <a href="{!! route('admin.managements.employers.create') !!}" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add</a>
                </div>

                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

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

                @include('admin.employers.table')

            </div>
        </div>
    </div>
@stop