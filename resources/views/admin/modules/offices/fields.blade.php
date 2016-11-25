<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{!! $errors->has('name') ? ' has-error' : '' !!}">
            <label for="name" class="control-label"><strong>Name:</strong></label>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{!! $errors->first('name') !!}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{!! $errors->has('department_unit_id') ? ' has-error' : '' !!}">
            <label for="name" class="control-label"><strong>Department unit:</strong></label>
            {!! Form::select('department_unit_id', $department_units, null, array('placeholder' => '--Pick department unit--','class' => 'form-control')) !!}
            @if($errors->has('department_unit_id'))
                <span class="help-block">
                    <strong>{!! $errors->first('department_unit_id') !!}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="control-label"><strong>Description:</strong></label>
            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                {!! Form::hidden('status', '0',false) !!}
                {!! Form::checkbox('status', '1', null) !!}
                {!! Form::label('status', 'Status') !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary waves-effect" href="{{ route('admin.modules.offices.index') }}"> Cancel</a>
        </div>
    </div>
</div>