<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#job-history"
               aria-expanded="false" class="collapsed">
                3.Job History (Fill from New to Old)
            </a>
        </h4>
    </div>
    <div id="job-history" class="panel-collapse collapse">
        {{--A.Public job--}}
        <div class="col-md-12 m-l-15">
            <h4>A.Public Job</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_start_date') ? ' has-error' : '' !!}">
                    <label for="phj_start_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('phj_start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control')) !!}--}}
                        {!! Form::text('phj_start_date', (isset($employer->jobHistoryPrivatePublic->phj_start_date) ? $employer->jobHistoryPrivatePublic->phj_start_date : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'phj_start_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('phj_start_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('phj_start_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//End date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_end_date') ? ' has-error' : '' !!}">
                    <label for="phj_end_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('phj_end_date', null, array('placeholder' => 'Select your end date','class' => 'form-control')) !!}--}}
                        {!! Form::text('phj_end_date', (isset($employer->jobHistoryPrivatePublic->phj_end_date) ? $employer->jobHistoryPrivatePublic->phj_end_date : null), array('placeholder' => 'Select start end Date','class' => 'form-control', 'id'=>'phj_end_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('phj_end_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('phj_end_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//Ministry institute--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_ministry_institute') ? ' has-error' : '' !!}">
                    <label for="phj_ministry_institute" class="control-label">
                        <strong>Ministry/Institute:</strong></label>
                    {{--{!! Form::text('phj_ministry_institute', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_ministry_institute', (isset($employer->jobHistoryPrivatePublic->phj_ministry_institute) ? $employer->jobHistoryPrivatePublic->phj_ministry_institute : null), array('placeholder' => 'Enter your ministry or institute','class' => 'form-control', 'id'=>'phj_ministry_institute')) !!}
                    @if($errors->has('phj_ministry_institute'))
                        <span class="help-block">
                            <strong>{!! $errors->first('phj_ministry_institute') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Department--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_department') ? ' has-error' : '' !!}">
                    <label for="phj_department" class="control-label">
                        <strong>Department:</strong></label>
                    {{--{!! Form::text('phj_department', null, array('placeholder' => 'Select department','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_department', (isset($employer->jobHistoryPrivatePublic->phj_department) ? $employer->jobHistoryPrivatePublic->phj_department : null), array('placeholder' => 'Enter your department','class' => 'form-control', 'id'=>'phj_department')) !!}
                    @if($errors->has('phj_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('phj_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//position--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_occupation') ? ' has-error' : '' !!}">
                    <label for="phj_occupation" class="control-label"><strong>Position:</strong></label>
                    {{--{!! Form::text('phj_occupation', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_occupation', (isset($employer->jobHistoryPrivatePublic->phj_occupation) ? $employer->jobHistoryPrivatePublic->phj_occupation : null), array('placeholder' => 'Enter your position','class' => 'form-control', 'id'=>'phj_occupation')) !!}
                    @if($errors->has('phj_occupation'))
                        <span class="help-block">
                            <strong>{!! $errors->first('phj_occupation') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Others--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_others') ? ' has-error' : '' !!}">
                    <label for="phj_others" class="control-label">
                        <strong>Others:</strong></label>
                    {{--{!! Form::text('phj_others', null, array('placeholder' => 'Enter others','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_others', (isset($employer->jobHistoryPrivatePublic->phj_others) ? $employer->jobHistoryPrivatePublic->phj_others : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'phj_others')) !!}
                    @if($errors->has('phj_others'))
                        <span class="help-block">
                            <strong>{!! $errors->first('phj_others') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--B.Private job--}}
        <div class="col-md-12 m-l-15">
            <h4>A.Private Job</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {!! Form::text('start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('start_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('start_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//End date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('end_date') ? ' has-error' : '' !!}">
                    <label for="end_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {!! Form::text('end_date', null, array('placeholder' => 'Select your end date','class' => 'form-control')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('end_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('end_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//Ministry institute--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('ministry_institute') ? ' has-error' : '' !!}">
                    <label for="ministry_institute" class="control-label">
                        <strong>Ministry/Institute:</strong></label>
                    {!! Form::text('ministry_institute', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}
                    @if($errors->has('ministry_institute'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ministry_institute') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//position--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('occupation') ? ' has-error' : '' !!}">
                    <label for="occupation" class="control-label"><strong>Position:</strong></label>
                    {!! Form::text('occupation', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}
                    @if($errors->has('occupation'))
                        <span class="help-block">
                            <strong>{!! $errors->first('occupation') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Others--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('others') ? ' has-error' : '' !!}">
                    <label for="occupation_id" class="control-label">
                        <strong>Skills/Professional:</strong></label>
                    {!! Form::text('others', null, array('placeholder' => 'Enter others','class' => 'form-control')) !!}
                    @if($errors->has('others'))
                        <span class="help-block">
                            <strong>{!! $errors->first('others') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>