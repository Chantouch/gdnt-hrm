<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:35 AM
 */
?>
{{--B.Current status job--}}
<div class="col-md-12 m-l-15">
    <h4>ខ.ស្ថានភាពការងារបច្ចុប្បន្ន</h4>
</div>
<div class="panel-body">
    {{--//Level or Grade--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('cjs_frame_id') ? ' has-error' : '' !!}">
            <label for="cjs_frame_id" class="control-label">
                <strong>ក្របខណ្ឌឋានន្តរស័ក្តិ និង ថ្នាក់:</strong>
            </label>
            {{--{!! Form::text('cjs_frame_id', null, array('placeholder' => 'Select your frame','class' => 'form-control')) !!}--}}
            {!! Form::select('cjs_frame_id', (isset($employer->currentJob->cjs_frame_id) ? (isset($employer->currentJob->cjs_frame_id) ? $frame : null) : $frame), (isset($employer->currentJob->cjs_frame_id) ? $employer->currentJob->cjs_frame_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>កាលបរិច្ឆេទឡើងក្របខណ្ឌឋានន្តរស័ក្តិ និង ថ្នាក់ចុងក្រោយ:</strong></label>
            <div class="input-group">
                {{--{!! Form::text('cjs_last_date_promoted', null, array('placeholder' => 'Select permanent Date','class' => 'form-control', 'id' => 'cjs_last_date_promoted')) !!}--}}
                {!! Form::text('cjs_last_date_promoted', (isset($employer->currentJob->cjs_last_date_promoted) ? $employer->currentJob->cjs_last_date_promoted : null), array('placeholder' => 'Select permanent Date','class' => 'form-control date_picker', 'id'=>'cjs_last_date_promoted')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('cjs_last_date_promoted'))
                    <span class="help-block">
                            <strong>{!! $errors->first('cjs_last_date_promoted') !!}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    {{--//Occupation--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('cjs_occupation_id') ? ' has-error' : '' !!}">
            <label for="cjs_last_date_promoted" class="control-label">
                <strong>មុខរបរ:</strong></label>
            {{--{!! Form::text('cjs_occupation_id', null, array('placeholder' => 'Select occupation','class' => 'form-control')) !!}--}}
            {!! Form::select('cjs_occupation_id', (isset($employer->currentJob->cjs_occupation_id) ? (isset($employer->currentJob->cjs_occupation_id) ? $occupation : null) : $occupation), (isset($employer->currentJob->cjs_occupation_id) ? $employer->currentJob->cjs_occupation_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>កាលបរិច្ឆេទទទួលមុខតំណែងចុងក្រោយ:</strong></label>
            <div class="input-group">
                {{--{!! Form::text('cjs_last_date_got_promoted', null, array('placeholder' => 'Select last date got promoted','class' => 'form-control', 'id' => 'cjs_last_date_got_promoted')) !!}--}}
                {!! Form::text('cjs_last_date_got_promoted', (isset($employer->currentJob->cjs_last_date_got_promoted) ? $employer->currentJob->cjs_last_date_got_promoted : null), array('placeholder' => 'Select permanent Date','class' => 'form-control date_picker', 'id'=>'cjs_last_date_got_promoted')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('last_date_got_promoted'))
                    <span class="help-block">
                            <strong>{!! $errors->first('cjs_last_date_got_promoted') !!}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    {{--//Level or grade--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('cjs_department_id') ? ' has-error' : '' !!}">
            <label for="cjs_department_id" class="control-label">
                <strong>អគ្គលេខាធិការដ្ឋាន/អគ្គនាយកដ្ឋាន/អគ្គធិការដ្ឋាន/រិទ្យាស្ថាន:</strong></label>
            {{--{!! Form::text('cjs_department_id', null, array('placeholder' => 'Enter your department','class' => 'form-control')) !!}--}}
            {!! Form::select('cjs_department_id', (isset($employer->currentJob->cjs_department_id) ? (isset($employer->currentJob->cjs_department_id) ? $department : null) : $department), (isset($employer->currentJob->cjs_department_id) ? $employer->currentJob->cjs_department_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>អគ្គនាយកដ្ឋាន/អង្គភាព/មន្ទីរ:</strong></label>
            {{--{!! Form::text('cjs_department_unit_id', null, array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}--}}
            {!! Form::select('cjs_department_unit_id', (isset($employer->currentJob->cjs_department_unit_id) ? (isset($employer->currentJob->cjs_department_unit_id) ? $department_unit : null) : $department_unit), (isset($employer->currentJob->cjs_department_unit_id) ? $employer->currentJob->cjs_department_unit_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
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
                <strong>ការិយាល័យ:</strong></label>
            {{--{!! Form::text('cjs_office_id', null, array('placeholder' => 'Select office','class' => 'form-control')) !!}--}}
            {!! Form::select('cjs_office_id', (isset($employer->currentJob->cjs_office_id) ? (isset($employer->currentJob->cjs_office_id) ? $office : null) : $office), (isset($employer->currentJob->cjs_office_id) ? $employer->currentJob->cjs_office_id : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}
            @if($errors->has('cjs_office_id'))
                <span class="help-block">
                            <strong>{!! $errors->first('cjs_office_id') !!}</strong>
                        </span>
            @endif
        </div>
    </div>
</div>

