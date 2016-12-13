@extends('layouts.gdnt')
@section('title', "កែតម្រូវបុគ្កលិក $employer->full_name")
@section('specific_css')
    <link href="{!! asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}"
          rel="stylesheet">
    <style>
        ::-webkit-input-placeholder { /* Chrome */
            opacity: 0.4;
        }

        :-ms-input-placeholder { /* IE 10+ */
            opacity: 0.4;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            opacity: 0.4;
        }

        :-moz-placeholder { /* Firefox 4 - 18 */
            opacity: 0.4;
        }

        ::-webkit-input-placeholder { /* Chrome */
            transition: opacity 250ms ease-in-out;
        }

        :focus::-webkit-input-placeholder {
            opacity: 0.69;
        }

        :-ms-input-placeholder { /* IE 10+ */

            transition: opacity 250ms ease-in-out;
        }

        :focus:-ms-input-placeholder {
            opacity: 0.69;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            opacity: 1;
            transition: opacity 250ms ease-in-out;
        }

        :focus::-moz-placeholder {
            opacity: 0.69;
        }

        :-moz-placeholder { /* Firefox 4 - 18 */
            opacity: 1;
            transition: opacity 250ms ease-in-out;
        }

        :focus:-moz-placeholder {
            opacity: 0.69;
        }
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12">
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
        <div class="col-lg-12​​​​ col-sm-12 margin-tb">
            <div class="pull-left">
                <h2>កែប្រែបុគ្គលិក ៖ {!! $employer->full_name !!}</h2>
            </div>
            <div class="pull-right">
                <h2><a class="btn btn-primary" href="{{ route('admin.managements.employers.index') }}"> Back</a></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                {!! Form::model($employer, ['method' => 'PATCH','route' => ['admin.managements.employers.update', $employer->id], 'class' => 'form', 'role'=> 'form']) !!}
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

        $("input.date_picker").click(function () {
            $(this).datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-m-d'
            });
        });

    </script>
@stop
@section('script_ready')

    $(".date_picker").datepicker({
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

    {{--//Start Basic out of frame --}}
    $('button#out_frame_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'more_frame', 'add_frame');
    });

    $('button#out_frame_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row("div#add_frame");
    });
    {{--//End Basic out of frame --}}

    {{--//Start No Salary Status--}}
    $('button#nss_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'nss_form_add', 'nss_form');
    });

    $('button#nss_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#nss_form');
    });
    {{--//End No Salary Status--}}

    {{--//Start History Private Job--}}
    $('button#hpj_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form_private();
    });

    $('button#hpj_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#hpj_add_form');
    });
    {{--//End History Private Job--}}

    {{--Form Public History Job--}}
    $('button#phj_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'public_add_form', 'public_form');
    });

    $('button#phj_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#public_form');
    });
    {{--End form public history job--}}

    {{--Start Form Award Form--}}
    $('button#aw_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'award_form', 'award_form_add');
    });

    $('button#aw_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#award_form_add');
    });
    {{--End Form Award Form--}}

    {{--Start Form Punishment Form--}}
    $('button#pun_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'punishment_form', 'punishment_form_add');
    });

    $('button#pun_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#punishment_form_add');
    });
    {{--End Form Punishement Form--}}

    {{--Start Form Children Form--}}
    $('button#child_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'child_form', 'child_form_add');
    });

    $('button#child_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#child_form_add');
    });
    {{--End Form Children Form--}}

    {{--Start Form Siblings Form--}}
    $('button#sibling_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'sibling_form', 'sibling_form_add');
    });

    $('button#sibling_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#sibling_form_add');
    });
    {{--End Form Siblings Form--}}

    {{--Start Form General Education Form--}}
    $('button#general_edu_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'general_edu_form', 'general_edu_form_add');
    });

    $('button#general_edu_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#general_edu_form_add');
    });
    {{--End Form General Education Form--}}

    {{--Start Form Degree/Specialize Form--}}
    $('button#degree_edu_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'degree_edu_form', 'degree_edu_form_add');
    });

    $('button#degree_edu_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#degree_edu_form_add');
    });
    {{--End Form Degree/Specialize Form--}}

    {{--Start Form Short Courses Form--}}
    $('button#courses_edu_btn_add').on('click', function(e){
    e.preventDefault();
    add_new_form('date_picker', 'courses_edu_form', 'courses_edu_form_add');
    });

    $('button#courses_edu_btn_remove').on('click', function(e){
    e.preventDefault();
    remove_row('div#courses_edu_form_add');
    });
    {{--End Form Short Courses Form--}}

@stop