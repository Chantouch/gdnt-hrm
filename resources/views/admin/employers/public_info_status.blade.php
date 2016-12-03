<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#public_status"
               class="collapsed" aria-expanded="false">
                2.Information status Public
            </a>
        </h4>
    </div>
    <div id="public_status" class="panel-collapse collapse">

        {{--A.First job in state--}}
        <div class="col-md-12 m-l-15">
            <h4>A.First State Job</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label"><strong>Start Date:</strong></label>
                    {!! Form::text('fsj_start_date', (isset($employer->firstStateJob->fsj_start_date)? $employer->firstStateJob->fsj_start_date : null), array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'start_date')) !!}
                    @if($errors->has('fsj_start_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_start_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Permanent staff--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_permanent_staff_date') ? ' has-error' : '' !!}">
                    <label for="permanent_staff_date" class="control-label">
                        <strong>Permanent Date:</strong></label>
                    {!! Form::text('fsj_permanent_staff_date', (isset($employer->firstStateJob->fsj_permanent_staff_date) ? $employer->firstStateJob->fsj_permanent_staff_date : null), array('placeholder' => 'Select permanent Date','class' => 'form-control', 'id'=>'fsj_permanent_staff_date')) !!}
                    @if($errors->has('fsj_permanent_staff_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_permanent_staff_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Level or grade--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_position_grade') ? ' has-error' : '' !!}">
                    <label for="fsj_frame_id" class="control-label"><strong>Position Grade:</strong></label>
                    {!! Form::select('fsj_frame_id', (isset($employer->firstStateJob->fsj_frame_id) ? (isset($employer->firstStateJob->fsj_frame_id) ? $frame : null) : $frame), (isset($employer->firstStateJob->fsj_frame_id) ? $employer->firstStateJob->fsj_frame_id : null), array('placeholder' => '--សូមជ្រើសរើសក្របខណ្ឌថ្នាក់--','class' => 'form-control')) !!}
                    @if($errors->has('fsj_frame_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_frame_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Occupation--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_occupation_id') ? ' has-error' : '' !!}">
                    <label for="occupation_id" class="control-label">
                        <strong>Occupation:</strong></label>
                    {!! Form::select('fsj_occupation_id', (isset($employer->firstStateJob->fsj_occupation_id) ? (isset($employer->firstStateJob->fsj_occupation_id) ? $occupation : null) : $occupation), (isset($employer->firstStateJob->fsj_occupation_id) ? $employer->firstStateJob->fsj_occupation_id : null), array('placeholder' => 'Select Occupation','class' => 'form-control')) !!}
                    @if($errors->has('fsj_occupation_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_occupation_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Ministry--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_ministry_id') ? ' has-error' : '' !!}">
                    <label for="ministry_id" class="control-label"><strong>Ministry:</strong></label>
                    {{--{!! Form::text('fsj_ministry_id', (isset($employer->firstStateJob->fsj_ministry_id) ? $employer->firstStateJob->fsj_ministry_id : null), array('placeholder' => 'Select ministry','class' => 'form-control')) !!}--}}
                    {!! Form::select('fsj_ministry_id', (isset($employer->firstStateJob->fsj_ministry_id) ? (isset($employer->firstStateJob->fsj_ministry_id) ? $ministry : null) : $ministry), (isset($employer->firstStateJob->fsj_ministry_id) ? $employer->firstStateJob->fsj_ministry_id : null), array('placeholder' => 'Select ministry','class' => 'form-control')) !!}
                    @if($errors->has('fsj_ministry_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_ministry_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Department--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_department_id') ? ' has-error' : '' !!}">
                    <label for="department_id" class="control-label">
                        <strong>Department:</strong></label>
                    {{--{!! Form::text('fsj_department_id', (isset($employer->firstStateJob->fsj_department_id) ? $employer->firstStateJob->fsj_department_id : null), array('placeholder' => 'Select department','class' => 'form-control')) !!}--}}
                    {!! Form::select('fsj_department_id', (isset($employer->firstStateJob->fsj_department_id) ? (isset($employer->firstStateJob->fsj_department_id) ? $department : null) : $department), (isset($employer->firstStateJob->fsj_department_id) ? $employer->firstStateJob->fsj_department_id : null), array('placeholder' => 'Select department','class' => 'form-control')) !!}
                    @if($errors->has('fsj_department_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_department_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Department unit--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_department_unit_id') ? ' has-error' : '' !!}">
                    <label for="department_unit_id" class="control-label"><strong>Department
                            Unit:</strong></label>
                    {{--{!! Form::text('fsj_department_unit_id', (isset($employer->firstStateJob->fsj_department_unit_id) ? $employer->firstStateJob->fsj_department_unit_id : null), array('placeholder' => 'Enter your department unit','class' => 'form-control')) !!}--}}
                    {!! Form::select('fsj_department_unit_id', (isset($employer->firstStateJob->fsj_department_unit_id) ? (isset($employer->firstStateJob->fsj_department_unit_id) ? $department_unit : null) : $department_unit), (isset($employer->firstStateJob->fsj_department_unit_id) ? $employer->firstStateJob->fsj_department_unit_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('fsj_department_unit_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_department_unit_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Office--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fsj_office_id') ? ' has-error' : '' !!}">
                    <label for="office_id" class="control-label">
                        <strong>Office:</strong></label>
                    {{--{!! Form::text('fsj_office_id', (isset($employer->firstStateJob->fsj_office_id) ? $employer->firstStateJob->fsj_office_id : null), array('placeholder' => 'Select office','class' => 'form-control')) !!}--}}
                    {!! Form::select('fsj_office_id', (isset($employer->firstStateJob->fsj_office_id) ? (isset($employer->firstStateJob->fsj_office_id) ? $office : null) : $office), (isset($employer->firstStateJob->fsj_office_id) ? $employer->firstStateJob->fsj_office_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('fsj_office_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fsj_office_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--B.Current status job--}}
        <div class="col-md-12 m-l-15">
            <h4>B.Current status Job</h4>
        </div>
        <div class="panel-body">
            {{--//Level or Grade--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_frame_id') ? ' has-error' : '' !!}">
                    <label for="cjs_frame_id" class="control-label"><strong>Frame:</strong></label>
                    {{--{!! Form::text('cjs_frame_id', null, array('placeholder' => 'Select your frame','class' => 'form-control')) !!}--}}
                    {!! Form::select('cjs_frame_id', (isset($employer->currentJob->cjs_frame_id) ? (isset($employer->currentJob->cjs_frame_id) ? $frame : null) : $frame), (isset($employer->currentJob->cjs_frame_id) ? $employer->currentJob->cjs_frame_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('cjs_frame_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_frame_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Last date promoted--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_last_date_promoted') ? ' has-error' : '' !!}">
                    <label for="cjs_last_date_promoted" class="control-label">
                        <strong>Last Date Promoted:</strong></label>
                    {{--{!! Form::text('cjs_last_date_promoted', null, array('placeholder' => 'Select permanent Date','class' => 'form-control', 'id' => 'cjs_last_date_promoted')) !!}--}}
                    {!! Form::text('cjs_last_date_promoted', (isset($employer->currentJob->cjs_last_date_promoted) ? $employer->currentJob->cjs_last_date_promoted : null), array('placeholder' => 'Select permanent Date','class' => 'form-control', 'id'=>'cjs_last_date_promoted')) !!}
                    @if($errors->has('cjs_last_date_promoted'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_last_date_promoted') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Occupation--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_occupation_id') ? ' has-error' : '' !!}">
                    <label for="cjs_last_date_promoted" class="control-label">
                        <strong>Occupation:</strong></label>
                    {{--{!! Form::text('cjs_occupation_id', null, array('placeholder' => 'Select occupation','class' => 'form-control')) !!}--}}
                    {!! Form::select('cjs_occupation_id', (isset($employer->currentJob->cjs_occupation_id) ? (isset($employer->currentJob->cjs_occupation_id) ? $occupation : null) : $occupation), (isset($employer->currentJob->cjs_occupation_id) ? $employer->currentJob->cjs_occupation_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('cjs_occupation_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_occupation_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Last date got promoted--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('last_date_got_promoted') ? ' has-error' : '' !!}">
                    <label for="cjs_last_date_got_promoted" class="control-label">
                        <strong>Last Date Promoted:</strong></label>
                    {{--{!! Form::text('cjs_last_date_got_promoted', null, array('placeholder' => 'Select last date got promoted','class' => 'form-control', 'id' => 'cjs_last_date_got_promoted')) !!}--}}
                    {!! Form::text('cjs_last_date_got_promoted', (isset($employer->currentJob->cjs_last_date_got_promoted) ? $employer->currentJob->cjs_last_date_got_promoted : null), array('placeholder' => 'Select permanent Date','class' => 'form-control', 'id'=>'cjs_last_date_got_promoted')) !!}
                    @if($errors->has('last_date_got_promoted'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_last_date_got_promoted') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Level or grade--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_department_id') ? ' has-error' : '' !!}">
                    <label for="cjs_department_id" class="control-label">
                        <strong>Last Position:</strong></label>
                    {{--{!! Form::text('cjs_department_id', null, array('placeholder' => 'Enter your department','class' => 'form-control')) !!}--}}
                    {!! Form::select('cjs_department_id', (isset($employer->currentJob->cjs_department_id) ? (isset($employer->currentJob->cjs_department_id) ? $department : null) : $department), (isset($employer->currentJob->cjs_department_id) ? $employer->currentJob->cjs_department_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('cjs_department_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_department_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Department unit--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_department_unit_id') ? ' has-error' : '' !!}">
                    <label for="cjs_department_unit_id" class="control-label">
                        <strong>Department unit:</strong></label>
                    {{--{!! Form::text('cjs_department_unit_id', null, array('placeholder' => 'Select department unit','class' => 'form-control')) !!}--}}
                    {!! Form::select('cjs_department_unit_id', (isset($employer->currentJob->cjs_department_unit_id) ? (isset($employer->currentJob->cjs_department_unit_id) ? $department_unit : null) : $department_unit), (isset($employer->currentJob->cjs_department_unit_id) ? $employer->currentJob->cjs_department_unit_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('cjs_department_unit_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_department_unit_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Office--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('cjs_office_id') ? ' has-error' : '' !!}">
                    <label for="cjs_office_id" class="control-label">
                        <strong>Office:</strong></label>
                    {{--{!! Form::text('cjs_office_id', null, array('placeholder' => 'Select office','class' => 'form-control')) !!}--}}
                    {!! Form::select('cjs_office_id', (isset($employer->currentJob->cjs_office_id) ? (isset($employer->currentJob->cjs_office_id) ? $office : null) : $office), (isset($employer->currentJob->cjs_office_id) ? $employer->currentJob->cjs_office_id : null), array('placeholder' => 'Select department unit','class' => 'form-control')) !!}
                    @if($errors->has('cjs_office_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('cjs_office_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--C.Addon to current position--}}
        <div class="col-md-12 m-l-15">
            <h4>C.Addon to current position</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('acp_start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label"><strong>Start date:</strong></label>
                    {{--{!! Form::text('acp_start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'acp_start_date')) !!}--}}
                    {!! Form::text('acp_start_date', (isset($employer->addOnCurrentPosition->acp_start_date) ? $employer->addOnCurrentPosition->acp_start_date : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'acp_start_date')) !!}
                    @if($errors->has('acp_start_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('acp_start_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Occupation--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('acp_position') ? ' has-error' : '' !!}">
                    <label for="position" class="control-label">
                        <strong>Position:</strong></label>
                    {{--{!! Form::text('acp_position', null, array('placeholder' => 'Enter position','class' => 'form-control')) !!}--}}
                    {!! Form::text('acp_position', (isset($employer->addOnCurrentPosition->acp_position) ? $employer->addOnCurrentPosition->acp_position : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'acp_position')) !!}
                    @if($errors->has('acp_position'))
                        <span class="help-block">
                            <strong>{!! $errors->first('acp_position') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Equal position--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('acp_equal_position') ? ' has-error' : '' !!}">
                    <label for="equal_position" class="control-label">
                        <strong>Equal position:</strong></label>
                    {{--{!! Form::text('acp_equal_position', null, array('placeholder' => 'Enter equal position','class' => 'form-control')) !!}--}}
                    {!! Form::text('acp_equal_position', (isset($employer->addOnCurrentPosition->acp_equal_position) ? $employer->addOnCurrentPosition->acp_equal_position : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'acp_equal_position')) !!}
                    @if($errors->has('acp_equal_position'))
                        <span class="help-block">
                            <strong>{!! $errors->first('acp_equal_position') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Department--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('acp_department') ? ' has-error' : '' !!}">
                    <label for="department" class="control-label">
                        <strong>Department:</strong></label>
                    {{--{!! Form::text('acp_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('acp_department', (isset($employer->addOnCurrentPosition->acp_department) ? $employer->addOnCurrentPosition->acp_department : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'acp_department')) !!}
                    @if($errors->has('acp_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('acp_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--D.Status out of frame--}}
        <div class="col-md-12 m-l-15">
            <h4>D.Status out of basic frame</h4>
        </div>
        <div class="panel-body">
            {{--//Department--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                    <label for="fn_department" class="control-label">
                        <strong>Department:</strong></label>
                    {{--{!! Form::text('fn_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('fn_department', (isset($employer->outFrameNoSalary->fn_department) ? $employer->outFrameNoSalary->fn_department : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'fn_department')) !!}
                    @if($errors->has('fn_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fn_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                    <label for="fn_start_date" class="control-label">
                        <strong>Start date:</strong></label>
                    {{--{!! Form::text('fn_start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control', 'id'=>'fn_start_date')) !!}--}}
                    {!! Form::text('fn_start_date', (isset($employer->outFrameNoSalary->fn_start_date) ? $employer->outFrameNoSalary->fn_start_date : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'fn_start_date')) !!}
                    @if($errors->has('fn_start_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fn_start_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//End date--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                    <label for="fn_end_date" class="control-label">
                        <strong>End date:</strong></label>
                    {{--{!! Form::text('fn_end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control', 'id'=>'fn_end_date')) !!}--}}
                    {!! Form::text('fn_end_date', (isset($employer->outFrameNoSalary->fn_end_date) ? $employer->outFrameNoSalary->fn_end_date : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'fn_end_date')) !!}
                    @if($errors->has('fn_end_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fn_end_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--E.Status of free no salary--}}
        <div class="col-md-12 m-l-15">
            <h4>E.Status of free no salary</h4>
        </div>
        <div class="panel-body">
            {{--//Department--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                    <label for="department" class="control-label">
                        <strong>Department:</strong></label>
                    {!! Form::text('department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}
                    @if($errors->has('department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label">
                        <strong>Start date:</strong></label>
                    {!! Form::text('start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control')) !!}
                    @if($errors->has('start_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('start_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//End date--}}
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('end_date') ? ' has-error' : '' !!}">
                    <label for="end_date" class="control-label">
                        <strong>End date:</strong></label>
                    {!! Form::text('end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control')) !!}
                    @if($errors->has('end_date'))
                        <span class="help-block">
                            <strong>{!! $errors->first('end_date') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>