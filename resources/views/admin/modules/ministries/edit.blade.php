@extends('layouts.gdnt')
@section('title', "$ministry->name")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Ministry: {!! $ministry->name !!}</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('admin.modules.ministries.index') }}"> Back</a>
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

                {!! Form::model($ministry, ['method' => 'PATCH','route' => ['admin.modules.ministries.update', $ministry->id], 'class' => 'form-horizontal', 'role'=> 'form']) !!}

                @include('admin.modules.ministries.fields')

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop