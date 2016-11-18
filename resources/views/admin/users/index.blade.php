@extends('layouts.gdnt')
@section('title', 'User list')

@section('specific_css')
    <link href="{!! asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') !!}" rel="stylesheet"
          type="text/css"/>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @include('admin.users.table')

@stop

@section('specific_js')
    <script src="{!! asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') !!}"></script>
    <script src="{!! asset('assets/pages/jquery.bs-table.js') !!}"></script>
@stop