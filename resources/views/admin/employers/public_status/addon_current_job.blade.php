<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:36 AM
 */
?>

{{--C.Addon to current position--}}
<div class="col-md-12 m-l-15">
    <h4>គ.តួនាទីបន្ថែមលើមុខងារបច្ចុប្បន្ន (ឋានៈស្មើ)</h4>
</div>
<div class="panel-body">
    {{--//Start date--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('acp_start_date') ? ' has-error' : '' !!}">
            <label for="start_date" class="control-label"><strong>កាលបរិច្ឆេទចូល:</strong></label>
            <div class="input-group">
                {{--{!! Form::text('acp_start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'acp_start_date')) !!}--}}
                {!! Form::text('acp_start_date', (isset($employer->addOnCurrentPosition->acp_start_date) ? $employer->addOnCurrentPosition->acp_start_date : null), array('placeholder' => 'សូមបញ្ចូលថ្ងៃចាប់ផ្តើម','class' => 'form-control date_picker', 'id'=>'acp_start_date')) !!}
                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                @if($errors->has('acp_start_date'))
                    <span class="help-block">
                            <strong>{!! $errors->first('acp_start_date') !!}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>
    {{--//Occupation--}}
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group{!! $errors->has('acp_position') ? ' has-error' : '' !!}">
            <label for="position" class="control-label">
                <strong>មុខតំណែង:</strong></label>
            {{--{!! Form::text('acp_position', null, array('placeholder' => 'Enter position','class' => 'form-control')) !!}--}}
            {!! Form::text('acp_position', (isset($employer->addOnCurrentPosition->acp_position) ? $employer->addOnCurrentPosition->acp_position : null), array('placeholder' => 'សូមបញ្ចូលមុខតំណែង','class' => 'form-control', 'id'=>'acp_position')) !!}
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
                <strong>ឋានៈស្មើ:</strong></label>
            {{--{!! Form::text('acp_equal_position', null, array('placeholder' => 'Enter equal position','class' => 'form-control')) !!}--}}
            {!! Form::text('acp_equal_position', (isset($employer->addOnCurrentPosition->acp_equal_position) ? $employer->addOnCurrentPosition->acp_equal_position : null), array('placeholder' => 'សូមបញ្ចូលឋានៈស្មើ','class' => 'form-control', 'id'=>'acp_equal_position')) !!}
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
                <strong>អង្គភាព:</strong></label>
            {{--{!! Form::text('acp_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
            {!! Form::text('acp_department', (isset($employer->addOnCurrentPosition->acp_department) ? $employer->addOnCurrentPosition->acp_department : null), array('placeholder' => 'សូមបញ្ចូលអង្គភាព','class' => 'form-control', 'id'=>'acp_department')) !!}
            @if($errors->has('acp_department'))
                <span class="help-block">
                            <strong>{!! $errors->first('acp_department') !!}</strong>
                        </span>
            @endif
        </div>
    </div>
</div>
