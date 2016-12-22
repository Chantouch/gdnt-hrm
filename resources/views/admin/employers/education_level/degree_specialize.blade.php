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
    <h4>ខ.កម្រិតសញ្ញាបត្រ/ជំនាញឯកទេស</h4>
</div>
<div class="panel-body">
    @if(isset($employer))
        @if(count($employer->degree_specializes) >= 1)
            @foreach($employer->degree_specializes as $degree_specialize)
                <div id="degree_edu_form">
                    <div id="degree_edu_form_add">
                        {{--//Level Education--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('ds_level_edu') ? ' has-error' : '' !!}">
                                <label for="ds_level_edu" class="control-label">
                                    <strong>កម្រិត:</strong>
                                </label>
                                {!! Form::text('ds_level_edu[]', (isset($degree_specialize->ds_level_edu) ? $degree_specialize->ds_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ds_level_edu')) !!}
                                @if($errors->has('ds_level_edu'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ds_level_edu') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//School--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ds_school') ? ' has-error' : '' !!}">
                                <label for="ds_school" class="control-label">
                                    <strong>ឈ្មោះសាលា:</strong>
                                </label>
                                {!! Form::text('ds_school[]', (isset($degree_specialize->ds_school) ? $degree_specialize->ds_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ds_school')) !!}
                                @if($errors->has('ds_school'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ds_school') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Country--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ds_country') ? ' has-error' : '' !!}">
                                <label for="ds_country" class="control-label">
                                    <strong>ប្រទេស:</strong>
                                </label>
                                {!! Form::text('ds_country[]', (isset($degree_specialize->ds_country) ? $degree_specialize->ds_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ds_country')) !!}
                                @if($errors->has('ds_country'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ds_country') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Degree--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('ds_degree') ? ' has-error' : '' !!}">
                                <label for="ds_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                                {!! Form::text('ds_degree[]', (isset($degree_specialize->ds_degree) ? $degree_specialize->ds_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ds_degree')) !!}
                                @if($errors->has('ds_degree'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('ds_degree') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Start date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ds_start_date') ? ' has-error' : '' !!}">
                                <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('ds_start_date[]', (isset($degree_specialize->ds_start_date) ? $degree_specialize->ds_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_start_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('ds_start_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('ds_start_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//End date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('ds_end_date') ? ' has-error' : '' !!}">
                                <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('ds_end_date[]', (isset($degree_specialize->ds_end_date) ? $degree_specialize->ds_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_end_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('ds_end_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('ds_end_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="degree_edu_form">
                <div id="degree_edu_form_add">
                    {{--//Level Education--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('ds_level_edu') ? ' has-error' : '' !!}">
                            <label for="ds_level_edu" class="control-label">
                                <strong>កម្រិត:</strong></label>
                            {{--{!! Form::text('ds_level_edu[]', (isset($employer->degree_specializes->ds_level_edu) ? $employer->degree_specializes->ds_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ds_level_edu')) !!}--}}
                            <input type="text" name="ds_level_edu[]" class="form-control">
                            @if($errors->has('ds_level_edu'))
                                <span class="help-block">
                                <strong>{!! $errors->first('ds_level_edu') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//School--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ds_school') ? ' has-error' : '' !!}">
                            <label for="ds_school" class="control-label">
                                <strong>ឈ្មោះសាលា:</strong></label>
                            {{--{!! Form::text('ds_school[]', (isset($employer->degree_specializes->ds_school) ? $employer->degree_specializes->ds_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ds_school')) !!}--}}
                            <input type="text" name="ds_school[]" class="form-control">
                            @if($errors->has('ds_school'))
                                <span class="help-block">
                                <strong>{!! $errors->first('ds_school') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Country--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ds_country') ? ' has-error' : '' !!}">
                            <label for="ds_country" class="control-label">
                                <strong>ប្រទេស:</strong></label>
                            {{--{!! Form::text('ds_country[]', (isset($employer->degree_specializes->ds_country) ? $employer->degree_specializes->ds_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ds_country')) !!}--}}
                            <input type="text" name="ds_country[]" class="form-control">
                            @if($errors->has('ds_country'))
                                <span class="help-block">
                                <strong>{!! $errors->first('ds_country') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Degree--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('ds_degree') ? ' has-error' : '' !!}">
                            <label for="ds_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                            {{--{!! Form::text('ds_degree[]', (isset($employer->degree_specializes->ds_degree) ? $employer->degree_specializes->ds_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ds_degree')) !!}--}}
                            <input type="text" name="ds_degree[]" class="form-control">
                            @if($errors->has('ds_degree'))
                                <span class="help-block">
                                <strong>{!! $errors->first('ds_degree') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ds_start_date') ? ' has-error' : '' !!}">
                            <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('ds_start_date[]', (isset($employer->degree_specializes->ds_start_date) ? $employer->degree_specializes->ds_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_start_date')) !!}--}}
                                <input type="text" name="ds_start_date[]" class="form-control date_picker">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i>
                            </span>
                                @if($errors->has('ds_start_date'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('ds_start_date') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('ds_end_date') ? ' has-error' : '' !!}">
                            <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('ds_end_date[]', (isset($employer->degree_specializes->ds_end_date) ? $employer->degree_specializes->ds_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_end_date')) !!}--}}
                                <input type="text" name="ds_end_date[]" class="form-control">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i>
                            </span>
                                @if($errors->has('ds_end_date'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('ds_end_date') !!}</strong>
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
                            <button type="button" id="degree_edu_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="degree_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-minus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="degree_edu_form">
            <div id="degree_edu_form_add">
                {{--//Level Education--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('ds_level_edu') ? ' has-error' : '' !!}">
                        <label for="ds_level_edu" class="control-label">
                            <strong>កម្រិត:</strong></label>
                        {{--{!! Form::text('ds_level_edu[]', (isset($employer->degree_specializes->ds_level_edu) ? $employer->degree_specializes->ds_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'ds_level_edu')) !!}--}}
                        <input type="text" name="ds_level_edu[]" class="form-control">
                        @if($errors->has('ds_level_edu'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ds_level_edu') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//School--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ds_school') ? ' has-error' : '' !!}">
                        <label for="ds_school" class="control-label">
                            <strong>ឈ្មោះសាលា:</strong></label>
                        {{--{!! Form::text('ds_school[]', (isset($employer->degree_specializes->ds_school) ? $employer->degree_specializes->ds_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'ds_school')) !!}--}}
                        <input type="text" name="ds_school[]" class="form-control">
                        @if($errors->has('ds_school'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ds_school') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Country--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ds_country') ? ' has-error' : '' !!}">
                        <label for="ds_country" class="control-label">
                            <strong>ប្រទេស:</strong></label>
                        {{--{!! Form::text('ds_country[]', (isset($employer->degree_specializes->ds_country) ? $employer->degree_specializes->ds_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'ds_country')) !!}--}}
                        <input type="text" name="ds_country[]" class="form-control">
                        @if($errors->has('ds_country'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ds_country') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Degree--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('ds_degree') ? ' has-error' : '' !!}">
                        <label for="ds_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                        {{--{!! Form::text('ds_degree[]', (isset($employer->degree_specializes->ds_degree) ? $employer->degree_specializes->ds_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'ds_degree')) !!}--}}
                        <input type="text" name="ds_degree[]" class="form-control">
                        @if($errors->has('ds_degree'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ds_degree') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ds_start_date') ? ' has-error' : '' !!}">
                        <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('ds_start_date[]', (isset($employer->degree_specializes->ds_start_date) ? $employer->degree_specializes->ds_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_start_date')) !!}--}}
                            <input type="text" name="ds_start_date[]" class="form-control date_picker">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i>
                            </span>
                            @if($errors->has('ds_start_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ds_start_date') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('ds_end_date') ? ' has-error' : '' !!}">
                        <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('ds_end_date[]', (isset($employer->degree_specializes->ds_end_date) ? $employer->degree_specializes->ds_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'ds_end_date')) !!}--}}
                            <input type="text" name="ds_end_date[]" class="form-control">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i>
                            </span>
                            @if($errors->has('ds_end_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ds_end_date') !!}</strong>
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
                        <button type="button" id="degree_edu_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="degree_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>