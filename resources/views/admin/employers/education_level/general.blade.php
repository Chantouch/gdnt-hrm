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
    @if(isset($employer))
        @if(count($employer->general_educations) >= 1)
            @foreach($employer->general_educations as $education)
                <div id="general_edu_form">
                    <div id="general_edu_form_add">
                        {{--//Level Education--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('ge_level_edu') ? ' has-error' : '' !!}">
                                <label for="ge_level_edu" class="control-label">
                                    <strong>កម្រិត:</strong>
                                </label>
                                {!! Form::text('ge_level_edu[]', (isset($education->ge_level_edu) ? $education->ge_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ge_level_edu')) !!}
                                @if($errors->has('ge_level_edu'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_level_edu') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//School--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ge_school') ? ' has-error' : '' !!}">
                                <label for="ge_school" class="control-label">
                                    <strong>ឈ្មោះសាលា:</strong>
                                </label>
                                {!! Form::text('ge_school[]', (isset($education->ge_school) ? $education->ge_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ge_school')) !!}
                                @if($errors->has('ge_school'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_school') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Country--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ge_country') ? ' has-error' : '' !!}">
                                <label for="ge_country" class="control-label">
                                    <strong>ប្រទេស:</strong>
                                </label>
                                {!! Form::text('ge_country[]', (isset($education->ge_country) ? $education->ge_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ge_country')) !!}
                                @if($errors->has('ge_country'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_country') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Degree--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('ge_degree') ? ' has-error' : '' !!}">
                                <label for="ge_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                                {!! Form::text('ge_degree[]', (isset($education->ge_degree) ? $education->ge_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ge_degree')) !!}
                                @if($errors->has('ge_degree'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_degree') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Start date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ge_start_date') ? ' has-error' : '' !!}">
                                <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('ge_start_date[]', (isset($education->ge_start_date) ? $education->ge_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_start_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('ge_start_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('ge_start_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//End date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ge_end_date') ? ' has-error' : '' !!}">
                                <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('ge_end_date[]', (isset($education->ge_end_date) ? $education->ge_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_end_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('ge_end_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('ge_end_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="general_edu_form">
                <div id="general_edu_form_add">
                    {{--//Level Education--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('ge_level_edu') ? ' has-error' : '' !!}">
                            <label for="ge_level_edu" class="control-label">
                                <strong>កម្រិត:</strong></label>
                            {!! Form::text('ge_level_edu[]', (isset($employer->educationLevel->ge_level_edu) ? $employer->educationLevel->ge_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ge_level_edu')) !!}
                            @if($errors->has('ge_level_edu'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_level_edu') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//School--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ge_school') ? ' has-error' : '' !!}">
                            <label for="ge_school" class="control-label">
                                <strong>ឈ្មោះសាលា:</strong></label>
                            {!! Form::text('ge_school[]', (isset($employer->educationLevel->ge_school) ? $employer->educationLevel->ge_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ge_school')) !!}
                            @if($errors->has('ge_school'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_school') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Country--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ge_country') ? ' has-error' : '' !!}">
                            <label for="ge_country" class="control-label">
                                <strong>ប្រទេស:</strong></label>
                            {!! Form::text('ge_country[]', (isset($employer->educationLevel->ge_country) ? $employer->educationLevel->ge_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ge_country')) !!}
                            @if($errors->has('ge_country'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_country') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Degree--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('ge_degree') ? ' has-error' : '' !!}">
                            <label for="ge_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                            {!! Form::text('ge_degree[]', (isset($employer->educationLevel->ge_degree) ? $employer->educationLevel->ge_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ge_degree')) !!}
                            @if($errors->has('ge_degree'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_degree') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ge_start_date') ? ' has-error' : '' !!}">
                            <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                            <div class="input-group">
                                {!! Form::text('ge_start_date[]', (isset($employer->educationLevel->ge_start_date) ? $employer->educationLevel->ge_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_start_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                @if($errors->has('ge_start_date'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_start_date') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ge_end_date') ? ' has-error' : '' !!}">
                            <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                {!! Form::text('ge_end_date[]', (isset($employer->educationLevel->ge_end_date) ? $employer->educationLevel->ge_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_end_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                @if($errors->has('ge_end_date'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ge_end_date') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--//Add more field--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                        <div class="form-group">
                            <button type="button" id="general_edu_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="general_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-minus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="general_edu_form">
            <div id="general_edu_form_add">
                {{--//Level Education--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('ge_level_edu') ? ' has-error' : '' !!}">
                        <label for="ge_level_edu" class="control-label">
                            <strong>កម្រិត:</strong></label>
                        {!! Form::text('ge_level_edu[]', (isset($employer->educationLevel->ge_level_edu) ? $employer->educationLevel->ge_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ge_level_edu')) !!}
                        @if($errors->has('ge_level_edu'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ge_level_edu') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//School--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ge_school') ? ' has-error' : '' !!}">
                        <label for="ge_school" class="control-label">
                            <strong>ឈ្មោះសាលា:</strong></label>
                        {!! Form::text('ge_school[]', (isset($employer->educationLevel->ge_school) ? $employer->educationLevel->ge_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ge_school')) !!}
                        @if($errors->has('ge_school'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ge_school') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Country--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ge_country') ? ' has-error' : '' !!}">
                        <label for="ge_country" class="control-label">
                            <strong>ប្រទេស:</strong></label>
                        {!! Form::text('ge_country[]', (isset($employer->educationLevel->ge_country) ? $employer->educationLevel->ge_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ge_country')) !!}
                        @if($errors->has('ge_country'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ge_country') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Degree--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('ge_degree') ? ' has-error' : '' !!}">
                        <label for="ge_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                        {!! Form::text('ge_degree[]', (isset($employer->educationLevel->ge_degree) ? $employer->educationLevel->ge_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ge_degree')) !!}
                        @if($errors->has('ge_degree'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ge_degree') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ge_start_date') ? ' has-error' : '' !!}">
                        <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                        <div class="input-group">
                            {!! Form::text('ge_start_date[]', (isset($employer->educationLevel->ge_start_date) ? $employer->educationLevel->ge_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_start_date')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                            @if($errors->has('ge_start_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_start_date') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ge_end_date') ? ' has-error' : '' !!}">
                        <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            {!! Form::text('ge_end_date[]', (isset($employer->educationLevel->ge_end_date) ? $employer->educationLevel->ge_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ge_end_date')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                            @if($errors->has('ge_end_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ge_end_date') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--//Add more field--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                    <div class="form-group">
                        <button type="button" id="general_edu_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="general_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>