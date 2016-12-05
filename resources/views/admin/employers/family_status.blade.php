<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#family_status"
               class="collapsed" aria-expanded="false">
                7.Family Status
            </a>
        </h4>
    </div>
    <div id="family_status" class="panel-collapse collapse in">
        <div class="col-md-12 m-l-15">
            <h4>A.Parents Info</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('f_full_name') ? ' has-error' : '' !!}">
                    <label for="f_full_name" class="control-label"><strong>Father Name:</strong></label>
                    {{--{!! Form::text('f_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_full_name', (isset($employer->father->f_full_name)? $employer->father->f_full_name : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('f_full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('f_fn_en') ? ' has-error' : '' !!}">
                    <label for="f_fn_en" class="control-label"><strong>Latin:</strong></label>
                    {{--{!! Form::text('f_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_fn_en', (isset($employer->father->f_fn_en)? $employer->father->f_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                    @if($errors->has('f_fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <label for="f_status" class="control-label col-md-12">Status:</label>
                <div class="col-md-12">
                    <div class="radio radio-info radio-inline">
                        {{--<input type="radio" id="yes" value="yes" name="m_subsidy" checked>--}}
                        {!! Form::radio('f_status', '1', null) !!}
                        <label for="yes"> Live </label>
                    </div>
                    <div class="radio radio-inline">
                        {{--<input type="radio" id="no" value="no" name="m_subsidy">--}}
                        {!! Form::radio('f_status', '0', null) !!}
                        <label for="no"> Dead </label>
                    </div>
                    @if($errors->has('f_status'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_status') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('f_dob') ? ' has-error' : '' !!}">
                    <label for="f_dob" class="control-label">
                        <strong>DOB:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('f_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'f_dob')) !!}--}}
                        {!! Form::text('f_dob', (isset($employer->father->f_dob)? $employer->father->f_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control', 'id'=>'f_dob')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('f_dob'))
                            <span class="help-block">
                            <strong>{!! $errors->first('f_dob') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('f_nationality') ? ' has-error' : '' !!}">
                    <label for="f_nationality" class="control-label">
                        <strong>Nationality:</strong></label>
                    {{--{!! Form::text('f_nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_nationality', (isset($employer->father->f_nationality)? $employer->father->f_nationality : null), array('placeholder' => 'Enter your nationality','class' => 'form-control')) !!}
                    @if($errors->has('f_nationality'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_nationality') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('f_ethnic') ? ' has-error' : '' !!}">
                    <label for="f_ethnic" class="control-label"><strong>Ethnic:</strong></label>
                    {{--{!! Form::text('f_ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_ethnic', (isset($employer->father->f_ethnic)? $employer->father->f_ethnic : null), array('placeholder' => 'Enter your ethnic','class' => 'form-control')) !!}
                    @if($errors->has('f_ethnic'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_ethnic') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('f_address') ? ' has-error' : '' !!}">
                    <label for="f_address" class="control-label"><strong>Address:</strong></label>
                    {{--{!! Form::textarea('f_address', null, array('placeholder' => 'Enter address','class' => 'form-control', 'rows'=>'4')) !!}--}}
                    {!! Form::textarea('f_address', (isset($employer->father->f_address)? $employer->father->f_address : null), array('placeholder' => 'Enter your address','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('f_address'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_address') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('f_job') ? ' has-error' : '' !!}">
                    <label for="f_job" class="control-label"><strong>Job:</strong></label>
                    {{--{!! Form::text('f_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_job', (isset($employer->father->f_job)? $employer->father->f_job : null), array('placeholder' => 'Enter current job','class' => 'form-control')) !!}
                    @if($errors->has('f_job'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_job') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('f_department') ? ' has-error' : '' !!}">
                    <label for="f_department" class="control-label"><strong>Department:</strong></label>
                    {{--{!! Form::text('f_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('f_department', (isset($employer->father->f_department)? $employer->father->f_department : null), array('placeholder' => 'Enter your department','class' => 'form-control')) !!}
                    @if($errors->has('f_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('f_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <hr>
        {{--//Mother info--}}
        <div class="panel-body">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('m_full_name') ? ' has-error' : '' !!}">
                    <label for="m_full_name" class="control-label"><strong>Mother Name:</strong></label>
                    {{--{!! Form::text('m_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_full_name', (isset($employer->mother->m_full_name)? $employer->mother->m_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
                    @if($errors->has('m_full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('m_fn_en') ? ' has-error' : '' !!}">
                    <label for="m_fn_en" class="control-label"><strong>Latin:</strong></label>
                    {{--{!! Form::text('m_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_fn_en', (isset($employer->mother->m_fn_en)? $employer->mother->m_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                    @if($errors->has('m_fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <label for="subsidy" class="control-label col-md-12">Status:</label>
                <div class="col-md-12">
                    <div class="radio radio-info radio-inline">
                        {{--<input type="radio" id="yes" value="yes" name="m_subsidy" checked>--}}
                        {!! Form::radio('m_status', '1', null) !!}
                        <label for="yes"> Live </label>
                    </div>
                    <div class="radio radio-inline">
                        {{--<input type="radio" id="no" value="no" name="m_subsidy">--}}
                        {!! Form::radio('m_status', '0', null) !!}
                        <label for="no"> Dead </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('m_dob') ? ' has-error' : '' !!}">
                    <label for="m_dob" class="control-label">
                        <strong>DOB:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('m_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'m_dob')) !!}--}}
                        {!! Form::text('m_dob', (isset($employer->mother->m_dob)? $employer->mother->m_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control', 'id'=>'m_dob')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('m_dob'))
                            <span class="help-block">
                            <strong>{!! $errors->first('m_dob') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('m_nationality') ? ' has-error' : '' !!}">
                    <label for="m_nationality" class="control-label">
                        <strong>Nationality:</strong></label>
                    {{--{!! Form::text('m_nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_nationality', (isset($employer->mother->m_nationality)? $employer->mother->m_nationality : null), array('placeholder' => 'Enter your nationality','class' => 'form-control')) !!}
                    @if($errors->has('m_nationality'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_nationality') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('m_ethnic') ? ' has-error' : '' !!}">
                    <label for="m_ethnic" class="control-label"><strong>Ethnic:</strong></label>
                    {{--{!! Form::text('m_ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_ethnic', (isset($employer->mother->m_ethnic)? $employer->mother->m_ethnic : null), array('placeholder' => 'Enter your ethnic','class' => 'form-control')) !!}
                    @if($errors->has('m_ethnic'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_ethnic') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('m_address') ? ' has-error' : '' !!}">
                    <label for="m_address" class="control-label"><strong>Address:</strong></label>
                    {{--{!! Form::textarea('m_address', null, array('placeholder' => 'Enter address','class' => 'form-control', 'rows'=>'4')) !!}--}}
                    {!! Form::textarea('m_address', (isset($employer->mother->m_address)? $employer->mother->m_address : null), array('placeholder' => 'Enter your address','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('m_address'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_address') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('m_job') ? ' has-error' : '' !!}">
                    <label for="m_job" class="control-label"><strong>Job:</strong></label>
                    {{--{!! Form::text('m_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_job', (isset($employer->mother->m_job)? $employer->mother->m_job : null), array('placeholder' => 'Enter your current job','class' => 'form-control')) !!}
                    @if($errors->has('m_job'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_job') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('m_department') ? ' has-error' : '' !!}">
                    <label for="m_department" class="control-label"><strong>Department:</strong></label>
                    {{--{!! Form::text('m_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('m_department', (isset($employer->mother->m_department)? $employer->mother->m_department : null), array('placeholder' => 'Enter your department','class' => 'form-control')) !!}
                    @if($errors->has('m_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('m_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <hr>
        {{--//B.Siblings info--}}
        {{--//Spouse info--}}
        <div class="col-md-12 m-l-15">
            <h4>B.Siblings info</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sib_full_name') ? ' has-error' : '' !!}">
                    <label for="sib_full_name" class="control-label"><strong>Full Name:</strong></label>
                    {{--{!! Form::text('sib_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                    {!! Form::text('sib_full_name', (isset($employer->siblings->sib_full_name)? $employer->siblings->sib_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
                    @if($errors->has('sib_full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sib_full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sib_fn_en') ? ' has-error' : '' !!}">
                    <label for="sib_fn_en" class="control-label"><strong>Latin:</strong></label>
                    {{--{!! Form::text('sib_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                    {!! Form::text('sib_fn_en', (isset($employer->siblings->sib_fn_en)? $employer->siblings->sib_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                    @if($errors->has('sib_fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sib_fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <label for="sib_gender" class="control-label col-md-12">Gender:</label>
                <div class="col-md-12">
                    <div class="radio radio-info radio-inline">
                        {{--<input type="radio" id="yes" value="yes" name="sib_subsidy" checked>--}}
                        {!! Form::radio('sib_gender', 'MALE', null) !!}
                        <label for="male"> Male </label>
                    </div>
                    <div class="radio radio-inline">
                        {{--<input type="radio" id="no" value="no" name="sib_subsidy">--}}
                        {!! Form::radio('sib_gender', 'FEMALE', null) !!}
                        <label for="female"> Female </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('sib_dob') ? ' has-error' : '' !!}">
                    <label for="sib_dob" class="control-label">
                        <strong>DOB:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('sib_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'sib_dob')) !!}--}}
                        {!! Form::text('sib_dob', (isset($employer->siblings->sib_dob)? $employer->siblings->sib_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control', 'id'=>'sib_dob')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('sib_dob'))
                            <span class="help-block">
                            <strong>{!! $errors->first('sib_dob') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('sib_job') ? ' has-error' : '' !!}">
                    <label for="sib_job" class="control-label"><strong>Job:</strong></label>
                    {{--{!! Form::text('sib_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                    {!! Form::text('sib_job', (isset($employer->siblings->sib_job)? $employer->siblings->sib_job : null), array('placeholder' => 'Enter your current job including department','class' => 'form-control')) !!}
                    @if($errors->has('sib_job'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sib_job') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>


            {{--<div class="col-xs-12 col-sm-4 col-md-4">--}}
            {{--<div class="form-group{!! $errors->has('sib_nationality') ? ' has-error' : '' !!}">--}}
            {{--<label for="sib_nationality" class="control-label">--}}
            {{--<strong>Nationality:</strong></label>--}}
            {{--{!! Form::text('sib_nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}--}}
            {{--{!! Form::text('sib_nationality', (isset($employer->siblings->sib_nationality)? $employer->siblings->sib_nationality : null), array('placeholder' => 'Enter your nationality','class' => 'form-control')) !!}--}}
            {{--@if($errors->has('sib_nationality'))--}}
            {{--<span class="help-block">--}}
            {{--<strong>{!! $errors->first('sib_nationality') !!}</strong>--}}
            {{--</span>--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-sm-4 col-md-4">--}}
            {{--<div class="form-group{!! $errors->has('sib_ethnic') ? ' has-error' : '' !!}">--}}
            {{--<label for="sib_ethnic" class="control-label"><strong>Ethnic:</strong></label>--}}
            {{--{!! Form::text('sib_ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}--}}
            {{--{!! Form::text('sib_ethnic', (isset($employer->siblings->sib_ethnic)? $employer->siblings->sib_ethnic : null), array('placeholder' => 'Enter your ethnic','class' => 'form-control')) !!}--}}
            {{--@if($errors->has('sib_ethnic'))--}}
            {{--<span class="help-block">--}}
            {{--<strong>{!! $errors->first('sib_ethnic') !!}</strong>--}}
            {{--</span>--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}


            {{--<div class="col-xs-12 col-sm-6 col-md-6">--}}
            {{--<div class="form-group{!! $errors->has('sib_department') ? ' has-error' : '' !!}">--}}
            {{--<label for="sib_department" class="control-label"><strong>Department:</strong></label>--}}
            {{--{!! Form::text('sib_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
            {{--{!! Form::text('sib_department', (isset($employer->siblings->sib_department)? $employer->siblings->sib_department : null), array('placeholder' => 'Enter your department','class' => 'form-control')) !!}--}}
            {{--@if($errors->has('sib_department'))--}}
            {{--<span class="help-block">--}}
            {{--<strong>{!! $errors->first('sib_department') !!}</strong>--}}
            {{--</span>--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
            {{--<div class="form-group{!! $errors->has('sib_address') ? ' has-error' : '' !!}">--}}
            {{--<label for="sib_address" class="control-label"><strong>Address:</strong></label>--}}
            {{--{!! Form::textarea('sib_address', null, array('placeholder' => 'Enter address','class' => 'form-control', 'rows'=>'4')) !!}--}}
            {{--{!! Form::textarea('sib_address', (isset($employer->siblings->sib_address)? $employer->siblings->sib_address : null), array('placeholder' => 'Enter your address','class' => 'form-control', 'rows'=>'3')) !!}--}}
            {{--@if($errors->has('sib_address'))--}}
            {{--<span class="help-block">--}}
            {{--<strong>{!! $errors->first('sib_address') !!}</strong>--}}
            {{--</span>--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
        <hr>
        {{--//Spouse info--}}
        <div class="col-md-12 m-l-15">
            <h4>C.Spouse info</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sp_full_name') ? ' has-error' : '' !!}">
                    <label for="sp_full_name" class="control-label"><strong>Spouse Name:</strong></label>
                    {{--{!! Form::text('sp_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_full_name', (isset($employer->spouse->sp_full_name)? $employer->spouse->sp_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
                    @if($errors->has('sp_full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sp_fn_en') ? ' has-error' : '' !!}">
                    <label for="sp_fn_en" class="control-label"><strong>Latin:</strong></label>
                    {{--{!! Form::text('sp_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_fn_en', (isset($employer->spouse->sp_fn_en)? $employer->spouse->sp_fn_en : null), array('placeholder' => 'Enter your latin name','class' => 'form-control')) !!}
                    @if($errors->has('sp_fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <label for="subsidy" class="control-label col-md-12">Status:</label>
                <div class="radio radio-info radio-inline">
                    {{--<input type="radio" id="yes" value="yes" name="m_subsidy" checked>--}}
                    {!! Form::radio('sp_status', '1', null) !!}
                    <label for="yes"> Live </label>
                </div>
                <div class="radio radio-inline">
                    {{--<input type="radio" id="no" value="no" name="m_subsidy">--}}
                    {!! Form::radio('sp_status', '0', null) !!}
                    <label for="no"> Dead </label>
                </div>
                @if($errors->has('sp_status'))
                    <span class="help-block">
                        <strong>{!! $errors->first('sp_status') !!}</strong>
                    </span>
                @endif
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_dob') ? ' has-error' : '' !!}">
                    <label for="sp_dob" class="control-label">
                        <strong>Date of birth:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('sp_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'sp_dob')) !!}--}}
                        {!! Form::text('sp_dob', (isset($employer->spouse->sp_dob)? $employer->spouse->sp_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control', 'id'=>'sp_dob')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('sp_dob'))
                            <span class="help-block">
                            <strong>{!! $errors->first('sp_dob') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_nationality') ? ' has-error' : '' !!}">
                    <label for="sp_nationality" class="control-label">
                        <strong>Nationality:</strong></label>
                    {{--{!! Form::text('sp_nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_nationality', (isset($employer->spouse->sp_nationality)? $employer->spouse->sp_nationality : null), array('placeholder' => 'Enter your nationality','class' => 'form-control')) !!}
                    @if($errors->has('sp_nationality'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_nationality') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_ethnic') ? ' has-error' : '' !!}">
                    <label for="sp_ethnic" class="control-label"><strong>Ethnic:</strong></label>
                    {{--{!! Form::text('sp_ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_ethnic', (isset($employer->spouse->sp_ethnic)? $employer->spouse->sp_ethnic : null), array('placeholder' => 'Enter your ethnic','class' => 'form-control')) !!}
                    @if($errors->has('sp_ethnic'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_ethnic') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('sp_pob') ? ' has-error' : '' !!}">
                    <label for="sp_pob" class="control-label"><strong>Place of birth:</strong></label>
                    {{--{!! Form::textarea('sp_pob', null, array('placeholder' => 'Enter pob','class' => 'form-control', 'rows'=>'4')) !!}--}}
                    {!! Form::textarea('sp_pob', (isset($employer->spouse->sp_pob)? $employer->spouse->sp_pob : null), array('placeholder' => 'Enter place of birth','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('sp_pob'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_pob') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sp_job') ? ' has-error' : '' !!}">
                    <label for="sp_job" class="control-label"><strong>Job:</strong></label>
                    {{--{!! Form::text('sp_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_job', (isset($employer->spouse->sp_job)? $employer->spouse->sp_job : null), array('placeholder' => 'Enter his/her current job','class' => 'form-control')) !!}
                    @if($errors->has('sp_job'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_job') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('sp_department') ? ' has-error' : '' !!}">
                    <label for="sp_department" class="control-label"><strong>Department:</strong></label>
                    {{--{!! Form::text('sp_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_department', (isset($employer->spouse->sp_department)? $employer->spouse->sp_department : null), array('placeholder' => 'Enter his/her department','class' => 'form-control')) !!}
                    @if($errors->has('sp_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <label for="subsidy" class="control-label col-md-12">Subsidy:</label>
                <div class="col-md-12">
                    <div class="radio radio-info radio-inline">
                        {!! Form::radio('sp_subsidy', '1', null) !!}
                        <label for="yes"> Yes </label>
                    </div>
                    <div class="radio radio-inline">
                        {!! Form::radio('sp_subsidy', '0', null) !!}
                        <label for="no"> No </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_hand_phone') ? ' has-error' : '' !!}">
                    <label for="sp_hand_phone" class="control-label"><strong>Hand Phone:</strong></label>
                    {{--{!! Form::text('sp_hand_phone', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_hand_phone', (isset($employer->spouse->sp_hand_phone)? $employer->spouse->sp_hand_phone : null), array('placeholder' => 'Enter his/her hand phone','class' => 'form-control')) !!}
                    @if($errors->has('sp_hand_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_hand_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_work_phone') ? ' has-error' : '' !!}">
                    <label for="sp_work_phone" class="control-label"><strong>Work Phone:</strong></label>
                    {{--{!! Form::text('sp_work_phone', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_work_phone', (isset($employer->spouse->sp_work_phone)? $employer->spouse->sp_work_phone : null), array('placeholder' => 'Enter his/her work phone','class' => 'form-control')) !!}
                    @if($errors->has('sp_work_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_work_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('sp_home_phone') ? ' has-error' : '' !!}">
                    <label for="sp_home_phone" class="control-label"><strong>Home Phone:</strong></label>
                    {{--{!! Form::text('sp_home_phone', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('sp_home_phone', (isset($employer->spouse->sp_home_phone)? $employer->spouse->sp_home_phone : null), array('placeholder' => 'Enter his/her home phone','class' => 'form-control')) !!}
                    @if($errors->has('sp_home_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sp_home_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>