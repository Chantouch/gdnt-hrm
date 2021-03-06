@extends('layouts.gdnt')
@section('title', 'Create new language')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-left">
                <h2>Create new Language</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.modules.languages.index') }}"> Back</a>
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

            <div class="card-box">
                {!! Form::open(array('route' => 'admin.modules.languages.store','method'=>'POST', 'class'=> 'form-horizontal', 'role'=> 'form')) !!}
                @include('admin.modules.languages.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop