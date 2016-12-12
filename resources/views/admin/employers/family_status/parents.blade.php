<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:41 AM
 */
?>
<div class="col-md-12 m-l-15">
    <h4>ក.ព័ត៏មានឪពុកម្តាយ</h4>
</div>
<div class="panel-body">
    <div class="col-xs-12 col-sm-5 col-md-5">
        <div class="form-group{!! $errors->has('f_full_name') ? ' has-error' : '' !!}">
            <label for="f_full_name" class="control-label"><strong>ឈ្មោះឪពុក:</strong></label>
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
            <label for="f_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
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
        <div class="form-group">
            <label for="f_status" class="control-label col-md-12">ស្ថានភាព:</label>
            {!! Form::select('f_status', (isset($employer->father->f_status) ? (isset($employer->father->f_status) ? $status : null) : $status), (isset($employer->father->f_status) ? $employer->father->f_status : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
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
                <strong>ថ្ថៃខែឆ្នាំកំណើត:</strong></label>
            <div class="input-group">
                {{--{!! Form::text('f_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'f_dob')) !!}--}}
                {!! Form::text('f_dob', (isset($employer->father->f_dob)? $employer->father->f_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'f_dob')) !!}
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
                <strong>សញ្ជាតិ:</strong></label>
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
            <label for="f_ethnic" class="control-label"><strong>ជនជាតិ:</strong></label>
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
            <label for="f_address" class="control-label"><strong>ទីលំនៅបច្ចុប្បន្ន:</strong></label>
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
            <label for="f_job" class="control-label"><strong>មុខរបរ:</strong></label>
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
            <label for="f_department" class="control-label"><strong>ស្ថាប័ន/ក្រសួង:</strong></label>
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
            <label for="m_full_name" class="control-label"><strong>ឈ្មោះម្តាយ:</strong></label>
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
            <label for="m_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
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
        <label for="subsidy" class="control-label col-md-12">ស្ថានភាព:</label>
        {!! Form::select('m_status', (isset($employer->mother->m_status) ? (isset($employer->mother->m_status) ? $status : null) : $status), (isset($employer->mother->m_status) ? $employer->mother->m_status : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
        @if($errors->has('m_status'))
            <span class="help-block">
                        <strong>{!! $errors->first('m_status') !!}</strong>
                    </span>
        @endif
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="form-group{!! $errors->has('m_dob') ? ' has-error' : '' !!}">
            <label for="m_dob" class="control-label">
                <strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
            <div class="input-group">
                {{--{!! Form::text('m_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'m_dob')) !!}--}}
                {!! Form::text('m_dob', (isset($employer->mother->m_dob)? $employer->mother->m_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'m_dob')) !!}
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
                <strong>សញ្ជាតិ:</strong></label>
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
            <label for="m_ethnic" class="control-label"><strong>ជនជាតិ:</strong></label>
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
            <label for="m_address" class="control-label"><strong>ទីលំនៅបច្ចុប្បន្ន:</strong></label>
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
            <label for="m_job" class="control-label"><strong>មុខរបរ:</strong></label>
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
            <label for="m_department" class="control-label"><strong>ស្ងាប័ន/អង្គភាព:</strong></label>
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
