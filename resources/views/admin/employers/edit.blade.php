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
    <script type="text/javascript">

        function addRow() {
            $("#add_language:first").clone(true).appendTo('#ll_lang').find('input, select').val('NO');
            //$("._details:first").clone(true).appendTo('#edu_details').find('.datepicker').val('');
        }
        function removeRow() {
            if ($("#add_language").length != 1)
                $("#add_language:last").last().remove()
        }
    </script>
@stop
@section('script_ready')

    jQuery('#cjs_last_date_promoted, #passport_expired_date, #dob, #id_card_expired, #start_date, #fsj_permanent_staff_date, #cjs_last_date_got_promoted, #acp_start_date, #fn_start_date, #fn_end_date, #phj_start_date, #phj_end_date, #ap_published_date, #el_start_date, #el_end_date, #whp_dob, #sp_dob, #m_dob, #f_dob, #sib_dob').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-m-d',
    });

    $('#add').on('click', function(e){
    e.preventDefault();
    addRow();
    });
    $('#minus').on('click', function(e){
    e.preventDefault();
    removeRow();
    });

@stop