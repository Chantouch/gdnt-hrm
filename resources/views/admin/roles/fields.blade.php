<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Display Name:</strong>
            {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
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
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>