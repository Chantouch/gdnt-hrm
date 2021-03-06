<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label for="name" class="control-label"><strong>Name:</strong></label>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label for="email" class="control-label"><strong>Email:</strong></label>
        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label for="password" class="control-label"><strong>Password:</strong></label>
        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label for="confirm-password" class="control-label"><strong>Confirm Password:</strong></label>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
    </div>
</div>
@if(Entrust::hasRole('system-admin'))
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="roles" class="control-label"><strong>Role:</strong></label>
            @if(isset($user_role))
                {!! Form::select('roles[]', $roles, $user_role, array('class' => 'select2 select2-multiple','multiple', 'id'=> 'roles', 'data-placeholder'=> 'Choose roles...')) !!}
            @else
                {!! Form::select('roles[]', $roles, [], array('class' => 'select2 select2-multiple','multiple', 'id'=> 'roles', 'data-placeholder'=> 'Choose roles...')) !!}
            @endif
        </div>
    </div>
@endif
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary waves-effect" href="{{ route('admin.users.index') }}"> Cancel</a>
</div>
