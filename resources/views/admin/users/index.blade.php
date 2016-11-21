@extends('layouts.gdnt')
@section('title', 'User list')

@section('specific_css')
    <link href="{!! asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') !!}" rel="stylesheet"
          type="text/css"/>
    <link href="{!! asset('css/gdnt-hrm.css') !!}" rel="stylesheet"
          type="text/css"/>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }} ♥</p>
        </div>
    @endif

    @include('admin.users.table')

    <div id="container-floating">

        {{--<div class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></div>--}}
        {{--<div class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com">--}}
            {{--<img class="reminder">--}}
            {{--<p class="letter">C</p>--}}
        {{--</div>--}}
        {{--<div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">--}}
            {{--<img class="reminder"--}}
                 {{--src="//ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_reminders_speeddial_white_24dp.png"/>--}}
        {{--</div>--}}
        {{--<div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it">--}}
            {{--<img class="reminder">--}}
            {{--<p class="letter">E</p>--}}
        {{--</div>--}}

        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="New">
            <p class="plus">+</p>
            <a href="{!! route('admin.users.create') !!}">
                <img class="edit"
                     src="{!! asset('images/icons/bt_compose2_1x.png') !!}">
            </a>
        </div>

    </div>

@stop

@section('specific_js')
    <script src="{!! asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') !!}"></script>
    <script src="{!! asset('assets/pages/jquery.bs-table.js') !!}"></script>
@stop
