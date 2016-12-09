<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 8:31 AM
 */
?>
{{--A.General Education--}}
<div class="col-md-12 m-l-15">
    <h4>ក.កម្រិតវប្បធម៏ទូទៅ</h4>
</div>
<div class="panel-body">
    {{--//Level Education--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('el_level_edu') ? ' has-error' : '' !!}">
            <label for="el_level_edu" class="control-label">
                <strong>កម្រិត:</strong></label>
            {!! Form::text('el_level_edu', (isset($employer->educationLevel->el_level_edu) ? $employer->educationLevel->el_level_edu : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'el_level_edu')) !!}
            @if($errors->has('el_level_edu'))
                <span class="help-block">
                    <strong>{!! $errors->first('el_level_edu') !!}</strong>
                </span>
            @endif
        </div>
    </div>
    {{--//School--}}
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="form-group{!! $errors->has('el_school') ? ' has-error' : '' !!}">
            <label for="el_school" class="control-label">
                <strong>ឈ្មោះសាលា:</strong></label>
            {!! Form::text('el_school', (isset($employer->educationLevel->el_school) ? $employer->educationLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}
            @if($errors->has('el_school'))
                <span class="help-block">
                    <strong>{!! $errors->first('el_school') !!}</strong>
                </span>
            @endif
        </div>
    </div>
    {{--//Country--}}
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="form-group{!! $errors->has('el_country') ? ' has-error' : '' !!}">
            <label for="el_country" class="control-label">
                <strong>ប្រទេស:</strong></label>
            {!! Form::text('el_country', (isset($employer->educationLevel->el_country) ? $employer->educationLevel->el_country : null), array('placeholder' => 'Enter country name','class' => 'form-control', 'id'=>'el_country')) !!}
            @if($errors->has('el_country'))
                <span class="help-block">
                    <strong>{!! $errors->first('el_country') !!}</strong>
                </span>
            @endif
        </div>
    </div>
    {{--//Degree--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('el_degree') ? ' has-error' : '' !!}">
            <label for="el_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
            {!! Form::text('el_degree', (isset($employer->educationLevel->el_degree) ? $employer->educationLevel->el_degree : null), array('placeholder' => 'Enter degree level','class' => 'form-control', 'id'=>'el_degree')) !!}
            @if($errors->has('el_degree'))
                <span class="help-block">
                    <strong>{!! $errors->first('el_degree') !!}</strong>
                </span>
            @endif
        </div>
    </div>
    {{--//Start date--}}
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="form-group{!! $errors->has('el_start_date') ? ' has-error' : '' !!}">
            <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
            <div class="input-group">
                {!! Form::text('el_start_date', (isset($employer->educationLevel->el_start_date) ? $employer->educationLevel->el_start_date : null), array('placeholder' => 'Enter start date','class' => 'form-control', 'id'=>'el_start_date')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('el_start_date'))
                    <span class="help-block">
                        <strong>{!! $errors->first('el_start_date') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    {{--//End date--}}
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="form-group{!! $errors->has('el_end_date') ? ' has-error' : '' !!}">
            <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
            <div class="input-group">
                {!! Form::text('el_end_date', (isset($employer->educationLevel->el_end_date) ? $employer->educationLevel->el_end_date : null), array('placeholder' => 'Enter end date','class' => 'form-control', 'id'=>'el_end_date')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('el_end_date'))
                    <span class="help-block">
                        <strong>{!! $errors->first('el_end_date') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>