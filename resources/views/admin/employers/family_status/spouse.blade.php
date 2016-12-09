<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:43 AM
 */
?>

{{--//Spouse info--}}
<div class="col-md-12 m-l-15">
    <h4>គ.ព័ត៏មានសហព័ន្ធ</h4>
</div>
<div class="panel-body">
    <div class="col-xs-12 col-sm-5 col-md-5">
        <div class="form-group{!! $errors->has('sp_full_name') ? ' has-error' : '' !!}">
            <label for="sp_full_name" class="control-label"><strong>ឈ្មោះប្តី/ប្រពន្ធ:</strong></label>
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
            <label for="sp_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
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
        <label for="subsidy" class="control-label col-md-12">ស្ថានភាព:</label>
        {{--<div class="radio radio-info radio-inline">--}}
        {{--<input type="radio" id="yes" value="yes" name="m_subsidy" checked>--}}
        {{--{!! Form::radio('sp_status', '1', null) !!}--}}
        {{--<label for="yes"> Live </label>--}}
        {{--</div>--}}
        {{--<div class="radio radio-inline">--}}
        {{--<input type="radio" id="no" value="no" name="m_subsidy">--}}
        {{--{!! Form::radio('sp_status', '0', null) !!}--}}
        {{--<label for="no"> Dead </label>--}}
        {{--</div>--}}
        {!! Form::select('sp_status', (isset($employer->spouse->sp_status) ? (isset($employer->spouse->sp_status) ? $status : null) : $status), (isset($employer->spouse->sp_status) ? $employer->spouse->sp_status : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
        @if($errors->has('sp_status'))
            <span class="help-block">
                        <strong>{!! $errors->first('sp_status') !!}</strong>
                    </span>
        @endif
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="form-group{!! $errors->has('sp_dob') ? ' has-error' : '' !!}">
            <label for="sp_dob" class="control-label">
                <strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
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
                <strong>សញ្ជាតិ:</strong></label>
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
            <label for="sp_ethnic" class="control-label"><strong>ជនជាតិ:</strong></label>
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
            <label for="sp_pob" class="control-label"><strong>ទីកន្លែងកំណើត:</strong></label>
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
            <label for="sp_job" class="control-label"><strong>មុខរបរ:</strong></label>
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
            <label for="sp_department" class="control-label"><strong>ស្ថាប័ន/អង្គភាព:</strong></label>
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
        <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
        {!! Form::select('sp_subsidy', (isset($employer->spouse->sp_subsidy) ? (isset($employer->spouse->sp_subsidy) ? $subsidy : null) : $subsidy), (isset($employer->spouse->sp_subsidy) ? $employer->spouse->sp_subsidy : null), array('placeholder' => 'Select subsidy','class' => 'form-control')) !!}
        @if($errors->has('sp_subsidy'))
            <span class="help-block">
                        <strong>{!! $errors->first('sp_subsidy') !!}</strong>
                    </span>
        @endif
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="form-group{!! $errors->has('sp_hand_phone') ? ' has-error' : '' !!}">
            <label for="sp_hand_phone" class="control-label"><strong>ទូរសព្ទដៃ:</strong></label>
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
            <label for="sp_work_phone" class="control-label"><strong>ទូរសព្ទធ្វើការ:</strong></label>
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
            <label for="sp_home_phone" class="control-label"><strong>ទូរសព្ទផ្ទះ:</strong></label>
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

