@extends('layouts.gdnt')
@section('title', 'Create new user')
@section('specific_css')
    <link href="{!! asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}"
          rel="stylesheet">
@stop
@section('content')
    <div class="row">
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
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create new Employer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.managements.employers.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                {!! Form::open(array('route' => 'admin.managements.employers.store','method'=>'POST', 'class'=> 'form', 'role'=> 'form')) !!}

                @include('admin.employers.fields')

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop


@section('specific_js')
    <script src="{!! asset('js/employer_edit_form.js') !!}"></script>
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
                $("#add_language").last().remove()
        }

        $("input.mydatepickers, input.nss_date_pickers, input.hpj_date_picker, input.phj_date_picker, input.aw_date_picker").click(function () {
            $(this).datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-m-d'
            });
        });

    </script>
@stop

@section('script_ready')

    jQuery('#cjs_last_date_promoted, #passport_expired_date, #dob, #id_card_expired, #start_date, #fsj_permanent_staff_date, #cjs_last_date_got_promoted, #acp_start_date').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-m-d',
    });

    jQuery('#el_start_date, #el_end_date, #whp_dob, #sp_dob, #m_dob, #f_dob, #sib_dob, #child_dob').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-m-d',
    });

    $(".mydatepickers, .nss_date_pickers, .hpj_date_picker, .phj_date_picker, .aw_date_picker, .pun_date_picker").datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-m-d',
    });

    $('#add').on('click', function(e){
    e.preventDefault();
    addRow();
    });

    $('button#minus').on('click', function(e){
    e.preventDefault();
    removeRow();
    });

    $('button#out_frame_btn_add').on('click', function(e){
    e.preventDefault();
    add_out_frame();
    });

    $('button#out_frame_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row("div#add_frame");
    });

    $('button#nss_btn_add').on('click', function(e){
    e.preventDefault();
    nss_add_row();
    });

    $('button#nss_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#nss_form');
    });


    $('button#hpj_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form_private();
    });

    $('button#hpj_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#hpj_add_form');
    });

    {{--Form Public History Job--}}
    $('button#phj_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form_public();
    });

    $('button#phj_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#public_form');
    });
    {{--End form public history job--}}

    {{--Start Form Award Form--}}
    $('button#aw_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form_award();
    });

    $('button#aw_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#award_form_add');
    });
    {{--End Form Award Form--}}

    {{--Start Form Punishment Form--}}
    $('button#pun_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form_punishment();
    });

    $('button#pun_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#punishment_form_add');
    });
    {{--End Form Punishement Form--}}

@stop