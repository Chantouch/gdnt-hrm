@extends('layouts.gdnt')
@section('title', "$employer->full_name")
@section('specific_css')
    <link href="{!! asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}"
          rel="stylesheet">
@stop
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Department: {!! $employer->name !!}</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('admin.managements.employers.index') }}"> Back</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
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

                {!! Form::model($employer, ['method' => 'PATCH','route' => ['admin.managements.employers.update', $employer->id], 'class' => 'form', 'role'=> 'form']) !!}

                @include('admin.employers.fields')

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop
@section('specific_script')
    <script src="{!! asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
@stop
@section('script_ready')

    jQuery('#passport_expired_date, #dob, #id_card_expired').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-M-d'
    });

@stop