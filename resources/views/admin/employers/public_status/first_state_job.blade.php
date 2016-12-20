<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:34 AM
 */
?>
{{--A.First job in state--}}
<div class="col-md-12 m-l-15">
    <h4>ក.ចូលបម្រើការងាររដ្ឋដំបូង</h4>
</div>
<div class="panel-body">
    {{--//Start date--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('fsj_start_date') ? ' has-error' : '' !!}">
            <label for="start_date"
                   class="control-label"><strong>កាលបរិច្ឆេទប្រកាសចូលបម្រើការងាររដ្ឋដំបូង:</strong></label>
            <div class="input-group">
                {!! Form::text('fsj_start_date', (isset($employer->firstStateJob->fsj_start_date)? $employer->firstStateJob->fsj_start_date : null), array('placeholder' => 'Select your start date','class' => 'form-control date_picker', 'id'=>'start_date')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('fsj_start_date'))
                    <span class="help-block">
                            <strong>{!! $errors->first('fsj_start_date') !!}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>

    {{--//Permanent staff--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('fsj_permanent_staff_date') ? ' has-error' : '' !!}">
            <label for="permanent_staff_date" class="control-label">
                <strong>កាលបរិច្ឆេទតាំងស៊ប់:</strong></label>
            <div class="input-group">
                {!! Form::text('fsj_permanent_staff_date', (isset($employer->firstStateJob->fsj_permanent_staff_date) ? $employer->firstStateJob->fsj_permanent_staff_date : null), array('placeholder' => 'Select permanent Date','class' => 'form-control date_picker', 'id'=>'fsj_permanent_staff_date')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('fsj_permanent_staff_date'))
                    <span class="help-block">
                            <strong>{!! $errors->first('fsj_permanent_staff_date') !!}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    {{--//Level or grade--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('fsj_position_grade') ? ' has-error' : '' !!}">
            <label for="fsj_frame_id" class="control-label">
                <strong>ក្របខណ្ឌឋានន្តរស័ក្តិ និង ថ្នាក់:</strong></label>
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
                <strong>មុខតំណែង:</strong></label>
            {!! Form::select('fsj_occupation_id', (isset($employer->firstStateJob->fsj_occupation_id) ? (isset($employer->firstStateJob->fsj_occupation_id) ? $occupation : null) : $occupation), (isset($employer->firstStateJob->fsj_occupation_id) ? $employer->firstStateJob->fsj_occupation_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
            <label for="ministry_id" class="control-label"><strong>ក្រសួង/ស្ថាប័ន:</strong></label>
            {{--{!! Form::text('fsj_ministry_id', (isset($employer->firstStateJob->fsj_ministry_id) ? $employer->firstStateJob->fsj_ministry_id : null), array('placeholder' => 'Select ministry','class' => 'form-control')) !!}--}}
            {!! Form::select('fsj_ministry_id', (isset($employer->firstStateJob->fsj_ministry_id) ? (isset($employer->firstStateJob->fsj_ministry_id) ? $ministry : null) : $ministry), (isset($employer->firstStateJob->fsj_ministry_id) ? $employer->firstStateJob->fsj_ministry_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>អង្គភាព:</strong></label>
            {{--{!! Form::text('fsj_department_id', (isset($employer->firstStateJob->fsj_department_id) ? $employer->firstStateJob->fsj_department_id : null), array('placeholder' => 'Select department','class' => 'form-control')) !!}--}}
            {!! Form::select('fsj_department_id', (isset($employer->firstStateJob->fsj_department_id) ? (isset($employer->firstStateJob->fsj_department_id) ? $department : null) : $department), (isset($employer->firstStateJob->fsj_department_id) ? $employer->firstStateJob->fsj_department_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
            <label for="department_unit_id" class="control-label">
                <strong>នាយកដ្ឋាន/អង្គភាព/មន្ទីរ:</strong></label>
            {{--{!! Form::text('fsj_department_unit_id', (isset($employer->firstStateJob->fsj_department_unit_id) ? $employer->firstStateJob->fsj_department_unit_id : null), array('placeholder' => 'Enter your department unit','class' => 'form-control')) !!}--}}
            {!! Form::select('fsj_department_unit_id', (isset($employer->firstStateJob->fsj_department_unit_id) ? (isset($employer->firstStateJob->fsj_department_unit_id) ? $department_unit : null) : $department_unit), (isset($employer->firstStateJob->fsj_department_unit_id) ? $employer->firstStateJob->fsj_department_unit_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>ការិយាល័យ:</strong></label>
            {{--{!! Form::text('fsj_office_id', (isset($employer->firstStateJob->fsj_office_id) ? $employer->firstStateJob->fsj_office_id : null), array('placeholder' => 'Select office','class' => 'form-control')) !!}--}}
            {!! Form::select('fsj_office_id', (isset($employer->firstStateJob->fsj_office_id) ? (isset($employer->firstStateJob->fsj_office_id) ? $office : null) : $office), (isset($employer->firstStateJob->fsj_office_id) ? $employer->firstStateJob->fsj_office_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
            @if($errors->has('fsj_office_id'))
                <span class="help-block">
                    <strong>{!! $errors->first('fsj_office_id') !!}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

