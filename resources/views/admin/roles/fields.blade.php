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
        <div class="form-group">
            <label for="display_name" class="control-label"><strong>Display Name:</strong></label>
            {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
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
            <label for="role_permission" class="control-label"><strong>Permission:</strong></label>
            <br/>
            @if(isset($role_permissions))
                @foreach($permission as $value)
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $role_permissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->display_name }}</label>
                    </div>
                @endforeach
            @else
                @foreach($permission as $value)
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->display_name }}</label>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary waves-effect" href="{{ route('admin.roles.index') }}"> Cancel</a>
        </div>
    </div>
</div>