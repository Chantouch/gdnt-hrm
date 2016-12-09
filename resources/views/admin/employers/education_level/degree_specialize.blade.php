<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:39 AM
 */
?>
{{--B.Degree/Specialize--}}
<div class="col-md-12 m-l-15">
    <h4>B.Degree/Specialize</h4>
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
