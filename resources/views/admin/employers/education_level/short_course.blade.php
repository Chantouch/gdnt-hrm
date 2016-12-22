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
    <h4>គ.វគ្គបណ្តុះបណ្តាលវិជ្ជាជីវៈ (ក្រោម១២ខែ)</h4>
</div>
<div class="panel-body">
    @if(isset($employer))
        @if(count($employer->short_courses) >= 1)
            @foreach($employer->short_courses as $short_course)
                <div id="courses_edu_form">
                    <div id="courses_edu_form_add">
                        {{--//Level Education--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('courses_level_edu') ? ' has-error' : '' !!}">
                                <label for="courses_level_edu" class="control-label">
                                    <strong>កម្រិត:</strong>
                                </label>
                                {!! Form::text('courses_level_edu[]', (isset($short_course->courses_level_edu) ? $short_course->courses_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'courses_level_edu')) !!}
                                <input type="text" name="courses_level_edu[]" class="form-control"
                                      value="{!! isset($short_course->courses_level_edu) ? $short_course->courses_level_edu : old('courses_level_edu[]') !!}"
                                            placeholder="សូមបញ្ចូលកម្រិតវប្បធម៏">
                                @if($errors->has('courses_level_edu'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('courses_level_edu') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//School--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('courses_school') ? ' has-error' : '' !!}">
                                <label for="courses_school" class="control-label">
                                    <strong>ឈ្មោះសាលា:</strong>
                                </label>
                                {!! Form::text('courses_school[]', (isset($short_course->courses_school) ? $short_course->courses_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'courses_school')) !!}
                                <input type="text" name="courses_school[]" class="form-control"
                                      value="{!! isset($short_course->courses_school) ? $short_course->courses_school : old('courses_school[]') !!}"
                                            placeholder="សូមបញ្ចូលឈ្នោះសាលារៀន">
                                @if($errors->has('courses_school'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('courses_school') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Country--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('courses_country') ? ' has-error' : '' !!}">
                                <label for="courses_country" class="control-label">
                                    <strong>ប្រទេស:</strong>
                                </label>
                                {!! Form::text('courses_country[]', (isset($short_course->courses_country) ? $short_course->courses_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'courses_country')) !!}
                                <input type="text" name="courses_country[]" class="form-control"
                                      value="{!! isset($short_course->courses_country) ? $short_course->courses_country : old('courses_country[]') !!}"
                                            placeholder="សូមបញ្ចូលប្រទេស">
                                @if($errors->has('courses_country'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('courses_country') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Degree--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('courses_degree') ? ' has-error' : '' !!}">
                                <label for="courses_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                                {!! Form::text('courses_degree[]', (isset($short_course->courses_degree) ? $short_course->courses_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'courses_degree')) !!}
                                <input type="text" name="courses_degree[]" class="form-control"
                                      value="{!! isset($short_course->courses_degree) ? $short_course->courses_degree : old('courses_degree[]') !!}"
                                            placeholder="សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)">
                                @if($errors->has('courses_degree'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('courses_degree') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//Start date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('courses_start_date') ? ' has-error' : '' !!}">
                                <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('courses_start_date[]', (isset($short_course->courses_start_date) ? $short_course->courses_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_start_date')) !!}
                                    <input type="text" name="courses_start_date[]" class="form-control date_picker"
                                          value="{!! isset($short_course->courses_start_date) ? $short_course->courses_start_date : old('courses_start_date[]') !!}"
                                                placeholder="ថ្ងៃចាប់ផ្តើមសិក្សា">
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('courses_start_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('courses_start_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//End date--}}
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="form-group{!! $errors->has('courses_end_date') ? ' has-error' : '' !!}">
                                <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('courses_end_date[]', (isset($short_course->courses_end_date) ? $short_course->courses_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_end_date')) !!}
                                    <input type="text" name="courses_end_date[]" class="form-control date_picker"
                                          value="{!! isset($short_course->courses_end_date) ? $short_course->courses_end_date : old('courses_end_date[]') !!}"
                                                placeholder="ថ្ងៃបញ្ចប់ការសិក្សា">
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                    @if($errors->has('courses_end_date'))
                                        <span class="help-block">
                                            <strong>{!! $errors->first('courses_end_date') !!}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="courses_edu_form">
                <div id="courses_edu_form_add">
                    {{--//Level Education--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('courses_level_edu') ? ' has-error' : '' !!}">
                            <label for="courses_level_edu" class="control-label">
                                <strong>កម្រិត:</strong></label>
                            {{--{!! Form::text('courses_level_edu[]', (isset($employer->educationLevel->courses_level_edu) ? $employer->educationLevel->courses_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'courses_level_edu')) !!}--}}
                            <input type="text" name="courses_level_edu[]" class="form-control"
                                  value="{!! isset($short_course->courses_level_edu) ? $short_course->courses_level_edu : old('courses_level_edu[]') !!}"
                                        placeholder="សូមបញ្ចូលកម្រិតវប្បធម៏">
                            @if($errors->has('courses_level_edu'))
                                <span class="help-block">
                                <strong>{!! $errors->first('courses_level_edu') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//School--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('courses_school') ? ' has-error' : '' !!}">
                            <label for="courses_school" class="control-label">
                                <strong>ឈ្មោះសាលា:</strong></label>
                            {{--{!! Form::text('courses_school[]', (isset($employer->educationLevel->courses_school) ? $employer->educationLevel->courses_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'courses_school')) !!}--}}
                            <input type="text" name="courses_school[]" class="form-control"
                                  value="{!! isset($short_course->courses_school) ? $short_course->courses_school : old('courses_school[]') !!}"
                                        placeholder="សូមបញ្ចូលឈ្នោះសាលារៀន">
                            @if($errors->has('courses_school'))
                                <span class="help-block">
                                <strong>{!! $errors->first('courses_school') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Country--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('courses_country') ? ' has-error' : '' !!}">
                            <label for="courses_country" class="control-label">
                                <strong>ប្រទេស:</strong></label>
                            {{--{!! Form::text('courses_country[]', (isset($employer->educationLevel->courses_country) ? $employer->educationLevel->courses_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'courses_country')) !!}--}}
                            <input type="text" name="courses_country[]" class="form-control"
                                  value="{!! isset($short_course->courses_country) ? $short_course->courses_country : old('courses_country[]') !!}"
                                        placeholder="សូមបញ្ចូលប្រទេស">
                            @if($errors->has('courses_country'))
                                <span class="help-block">
                                <strong>{!! $errors->first('courses_country') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Degree--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('courses_degree') ? ' has-error' : '' !!}">
                            <label for="courses_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                            {{--{!! Form::text('courses_degree[]', (isset($employer->educationLevel->courses_degree) ? $employer->educationLevel->courses_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'courses_degree')) !!}--}}
                            <input type="text" name="courses_degree[]" class="form-control"
                                  value="{!! isset($short_course->courses_degree) ? $short_course->courses_degree : old('courses_degree[]') !!}"
                                        placeholder="សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)">
                            @if($errors->has('courses_degree'))
                                <span class="help-block">
                                <strong>{!! $errors->first('courses_degree') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('courses_start_date') ? ' has-error' : '' !!}">
                            <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('courses_start_date[]', (isset($employer->educationLevel->courses_start_date) ? $employer->educationLevel->courses_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_start_date')) !!}--}}
                                <input type="text" name="courses_start_date[]" class="form-control date_picker"
                                      value="{!! isset($short_course->courses_start_date) ? $short_course->courses_start_date : old('courses_start_date[]') !!}"
                                            placeholder="ថ្ងៃចាប់ផ្តើមសិក្សា">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                                @if($errors->has('courses_start_date'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('courses_start_date') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group{!! $errors->has('courses_end_date') ? ' has-error' : '' !!}">
                            <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('courses_end_date[]', (isset($employer->educationLevel->courses_end_date) ? $employer->educationLevel->courses_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_end_date')) !!}--}}
                                <input type="text" name="courses_end_date[]" class="form-control date_picker"
                                      value="{!! isset($short_course->courses_end_date) ? $short_course->courses_end_date : old('courses_end_date[]') !!}"
                                            placeholder="ថ្ងៃបញ្ចប់ការសិក្សា">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                                @if($errors->has('courses_end_date'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('courses_end_date') !!}</strong>
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
                            <button type="button" id="courses_edu_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="courses_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-minus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="courses_edu_form">
            <div id="courses_edu_form_add">
                {{--//Level Education--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('courses_level_edu') ? ' has-error' : '' !!}">
                        <label for="courses_level_edu" class="control-label">
                            <strong>កម្រិត:</strong></label>
                        {{--{!! Form::text('courses_level_edu[]', (isset($employer->educationLevel->courses_level_edu) ? $employer->educationLevel->courses_level_edu : null), array('placeholder' => 'សូមបញ្ចូលកម្រិតវប្បធម៏','class' => 'form-control', 'id'=>'courses_level_edu')) !!}--}}
                        <input type="text" name="courses_level_edu[]" class="form-control"
                              value="{!! isset($short_course->courses_level_edu) ? $short_course->courses_level_edu : old('courses_level_edu[]') !!}"
                                    placeholder="សូមបញ្ចូលកម្រិតវប្បធម៏">
                        @if($errors->has('courses_level_edu'))
                            <span class="help-block">
                                <strong>{!! $errors->first('courses_level_edu') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//School--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('courses_school') ? ' has-error' : '' !!}">
                        <label for="courses_school" class="control-label">
                            <strong>ឈ្មោះសាលា:</strong></label>
                        {{--{!! Form::text('courses_school[]', (isset($employer->educationLevel->courses_school) ? $employer->educationLevel->courses_school : null), array('placeholder' => 'សូមបញ្ចូលឈ្នោះសាលារៀន','class' => 'form-control', 'id'=>'courses_school')) !!}--}}
                        <input type="text" name="courses_school[]" class="form-control"
                              value="{!! isset($short_course->courses_school) ? $short_course->courses_school : old('courses_school[]') !!}"
                                    placeholder="សូមបញ្ចូលឈ្នោះសាលារៀន">
                        @if($errors->has('courses_school'))
                            <span class="help-block">
                                <strong>{!! $errors->first('courses_school') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Country--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('courses_country') ? ' has-error' : '' !!}">
                        <label for="courses_country" class="control-label">
                            <strong>ប្រទេស:</strong></label>
                        {{--{!! Form::text('courses_country[]', (isset($employer->educationLevel->courses_country) ? $employer->educationLevel->courses_country : null), array('placeholder' => 'សូមបញ្ចូលប្រទេស','class' => 'form-control', 'id'=>'courses_country')) !!}--}}
                        <input type="text" name="courses_country[]" class="form-control"
                              value="{!! isset($short_course->courses_country) ? $short_course->courses_country : old('courses_country[]') !!}"
                                    placeholder="សូមបញ្ចូលប្រទេស">
                        @if($errors->has('courses_country'))
                            <span class="help-block">
                                <strong>{!! $errors->first('courses_country') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Degree--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('courses_degree') ? ' has-error' : '' !!}">
                        <label for="courses_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                        {{--{!! Form::text('courses_degree[]', (isset($employer->educationLevel->courses_degree) ? $employer->educationLevel->courses_degree : null), array('placeholder' => 'សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)','class' => 'form-control', 'id'=>'courses_degree')) !!}--}}
                        <input type="text" name="courses_degree[]" class="form-control"
                              value="{!! isset($short_course->courses_degree) ? $short_course->courses_degree : old('courses_degree[]') !!}"
                                    placeholder="សូមបញ្ចូលសញ្ញាបត្រទទួលបាន(ជំនាញឯកទេស)">
                        @if($errors->has('courses_degree'))
                            <span class="help-block">
                                <strong>{!! $errors->first('courses_degree') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('courses_start_date') ? ' has-error' : '' !!}">
                        <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('courses_start_date[]', (isset($employer->educationLevel->courses_start_date) ? $employer->educationLevel->courses_start_date : null), array('placeholder' => 'ថ្ងៃចាប់ផ្តើមសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_start_date')) !!}--}}
                            <input type="text" name="courses_start_date[]" class="form-control date_picker"
                                  value="{!! isset($short_course->courses_start_date) ? $short_course->courses_start_date : old('courses_start_date[]') !!}"
                                        placeholder="ថ្ងៃចាប់ផ្តើមសិក្សា">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                            @if($errors->has('courses_start_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('courses_start_date') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group{!! $errors->has('courses_end_date') ? ' has-error' : '' !!}">
                        <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('courses_end_date[]', (isset($employer->educationLevel->courses_end_date) ? $employer->educationLevel->courses_end_date : null), array('placeholder' => 'ថ្ងៃបញ្ចប់ការសិក្សា','class' => 'form-control date_picker', 'id'=>'courses_end_date')) !!}--}}
                            <input type="text" name="courses_end_date[]" class="form-control date_picker"
                                  value="{!! isset($short_course->courses_end_date) ? $short_course->courses_end_date : old('courses_end_date[]') !!}"
                                        placeholder="ថ្ងៃបញ្ចប់ការសិក្សា">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                            @if($errors->has('courses_end_date'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('courses_end_date') !!}</strong>
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
                        <button type="button" id="courses_edu_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="courses_edu_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
