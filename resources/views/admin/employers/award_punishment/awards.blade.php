<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 3:32 PM
 */
?>
{{--B.Punishment--}}
<div class="col-md-12 m-l-15">
    <h4>ក.គ្រឿ់ង​ឥស្សរិយស បណ្ណសរសើរ</h4>
</div>
<div class="panel-body">
    {{--//Doc number--}}
    @if(isset($employer))
        @if(count($employer->awards) >= 1)
            @foreach($employer->awards as $award)
                <div id="award_form_add">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                            <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                            <!-- {!! Form::text('aw_doc_number[]', (isset($award->aw_doc_number) ? $award->aw_doc_number : null), array('placeholder' => 'ឧទាហរណ៏៖​ 01255456','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_doc_number[]" class="form-control" value="{!! isset($award->aw_doc_number) ? $award->aw_doc_number : old('aw_doc_number') !!}" placeholder="ឧទាហរណ៏៖​ 01255456">
                            @if($errors->has('doc_number'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('doc_number') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Published_date--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                            <label for="published_date" class="control-label"><strong>កាលបរិច្ឆេទ:</strong></label>
                            <div class="input-group">
                                <!-- {!! Form::text('aw_published_date[]', (isset($award->aw_published_date) ? $award->aw_published_date : null), array('placeholder' => 'ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)','class' => 'form-control  date_picker')) !!} -->
                                <input type="text" name="aw_published_date[]" class="form-control" value="{!! isset($award->aw_published_date) ? $award->aw_published_date : old('aw_published_date') !!}" placeholder="ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                @if($errors->has('published_date'))
                                    <span class="help-block">
                                <strong>{!! $errors->first('published_date') !!}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//Department--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                            <label for="department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព (ស្នើសុំ):</strong></label>
                            <!-- {!! Form::text('aw_department[]', (isset($award->aw_department) ? $award->aw_department : null), array('placeholder' => 'សូមបញ្ចូលស្ថប័នឬអង្គភាព','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_department[]" class="form-control" value="{!! isset($award->aw_department) ? $award->aw_department : old('aw_department') !!}" placeholder="សូមបញ្ចូលស្ថប័នឬអង្គភាព">
                            @if($errors->has('department'))
                                <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    {{--//Type--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                            <label for="punish_type" class="control-label">
                                <strong>ប្រភេទ:</strong></label>
                            {{--{!! Form::text('aw_type[]', (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'Select your punish_type','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::select('aw_type[]', (isset($award->aw_type) ? (isset($award->aw_type) ? $types : null) : $types), (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'Select Type','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_type[]" class="form-control" value="{!! isset($award->aw_type) ? $award->aw_type : old('aw_type') !!}">
                            @if($errors->has('punish_type'))
                                <span class="help-block">
                            <strong>{!! $errors->first('punish_type') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    {{--//Description--}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group{!! $errors->has('description') ? ' has-error' : '' !!}">
                            <label for="description" class="control-label"><strong>ខ្លឹមសារ:</strong></label>
                            <!-- {!! Form::textarea('aw_description[]', (isset($award->aw_description) ? $award->aw_description : null), array('placeholder' => 'សូមបញ្ចូលខ្លឹមសារ','class' => 'form-control', 'rows'=> '4')) !!} -->
                            <input type="text" name="aw_description[]" class="form-control" value="{!! isset($award->aw_description) ? $award->aw_description : old('aw_description') !!}" placeholder="សូមបញ្ចូលខ្លឹមសារ">
                            @if($errors->has('description'))
                                <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="award_form">
                <div id="award_form_add">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                            <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                            <!-- {!! Form::text('aw_doc_number[]', (isset($award->aw_doc_number) ? $award->aw_doc_number : null), array('placeholder' => 'ឧទាហរណ៏៖​ 01255456','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_doc_number[]" class="form-control" value="{!! isset($award->aw_doc_number) ? $award->aw_doc_number : old('aw_doc_number') !!}" placeholder="ឧទាហរណ៏៖​ 01255456">
                            @if($errors->has('doc_number'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('doc_number') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{--//Published_date--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                            <label for="published_date" class="control-label"><strong>កាលបរិច្ឆេទ:</strong></label>
                            <div class="input-group">
                                <!-- {!! Form::text('aw_published_date[]', (isset($award->aw_published_date) ? $award->aw_published_date : null), array('placeholder' => 'ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)','class' => 'form-control  date_picker')) !!} -->
                                <input type="text" name="aw_published_date[]" class="form-control date_picker" value="{!! isset($award->aw_published_date) ? $award->aw_published_date : old('aw_published_date') !!}" placeholder="ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                @if($errors->has('published_date'))
                                    <span class="help-block">
                                <strong>{!! $errors->first('published_date') !!}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{--//Department--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                            <label for="department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព (ស្នើសុំ):</strong></label>
                            <!-- {!! Form::text('aw_department[]', (isset($award->aw_department) ? $award->aw_department : null), array('placeholder' => 'សូមបញ្ចូលស្ថប័នឬអង្គភាព','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_department[]" class="form-control" value="{!! isset($award->aw_department) ? $award->aw_department : old('aw_department') !!}" placeholder="សូមបញ្ចូលស្ថប័នឬអង្គភាព">
                            @if($errors->has('department'))
                                <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    {{--//Type--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                            <label for="punish_type" class="control-label">
                                <strong>ប្រភេទ:</strong></label>
                            {{--{!! Form::text('aw_type[]', (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'សូម','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::select('aw_type[]', (isset($award->aw_type) ? (isset($award->aw_type) ? $types : null) : $types), (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'សូមជ្រើសរើស','class' => 'form-control')) !!} -->
                            <input type="text" name="aw_type[]" class="form-control" value="{!! isset($award->aw_type) ? $award->aw_type : old('aw_type') !!}" placeholder="--សូមជ្រើសរើស--">
                            @if($errors->has('punish_type'))
                                <span class="help-block">
                            <strong>{!! $errors->first('punish_type') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    {{--//Description--}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group{!! $errors->has('description') ? ' has-error' : '' !!}">
                            <label for="description" class="control-label"><strong>ខ្លឹមសារ:</strong></label>
                            <!-- {!! Form::textarea('aw_description[]', (isset($award->aw_description) ? $award->aw_description : null), array('placeholder' => 'សូមបញ្ចូលខ្លឹមសារ','class' => 'form-control', 'rows'=> '4')) !!} -->
                            <input type="text" name="aw_description[]" class="form-control" value="{!! isset($award->aw_description) ? $award->aw_description : old('aw_description') !!}" placeholder="សូមបញ្ចូលខ្លឹមសារ">
                            @if($errors->has('description'))
                                <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{--//Add more field--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                        <div class="form-group">
                            <button type="button" id="aw_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="aw_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="award_form">
            <div id="award_form_add">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                        <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                        {{--{!! Form::text('aw_doc_number[]', (isset($award->aw_doc_number) ? $award->aw_doc_number : null), array('placeholder' => 'ឧទាហរណ៏៖ 01236545','class' => 'form-control')) !!}--}}
                        <input type="text" name="aw_doc_number[]" class="form-control" value="{!! isset($award->aw_doc_number) ? $award->aw_doc_number : old('aw_doc_number') !!}" placeholder="ឧទាហរណ៏៖ 01236545">
                        @if($errors->has('doc_number'))
                            <span class="help-block">
                                    <strong>{!! $errors->first('doc_number') !!}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                {{--//Published_date--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                        <label for="published_date" class="control-label"><strong>កាលបរិច្ឆេទ:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('aw_published_date[]', (isset($award->aw_published_date) ? $award->aw_published_date : null), array('placeholder' => 'ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)','class' => 'form-control  date_picker')) !!}--}}
                            <input type="text" name="aw_published_date[]" class="form-control date_picker" value="{!! isset($award->aw_published_date) ? $award->aw_published_date : old('aw_published_date') !!}" placeholder="ទម្រង់៖ឆ្នាំខែថ្ងៃ(Y-m-d)">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                            @if($errors->has('published_date'))
                                <span class="help-block">
                                <strong>{!! $errors->first('published_date') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                {{--//Department--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                        <label for="department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព (ស្នើសុំ):</strong></label>
                        {{--{!! Form::text('aw_department[]', (isset($award->aw_department) ? $award->aw_department : null), array('placeholder' => 'សូមបញ្ចូលស្ថាប័នឬអង្គភាព','class' => 'form-control')) !!}--}}
                        <input type="text" name="aw_department[]" class="form-control" value="{!! isset($award->aw_department) ? $award->aw_department : old('aw_department') !!}" placeholder="សូមបញ្ចូលស្ថាប័នឬអង្គភាព">
                        @if($errors->has('department'))
                            <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{--//Type--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                        <label for="punish_type" class="control-label">
                            <strong>ប្រភេទ:</strong></label>
                        {{--{!! Form::text('aw_type[]', (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'សូមបញ្ចូល','class' => 'form-control')) !!}--}}
                        {{--{!! Form::select('aw_type[]', (isset($award->aw_type) ? (isset($award->aw_type) ? $types : null) : $types), (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!}--}}
                        <input type="text" name="aw_type[]" class="form-control" value="{!! isset($award->aw_type) ? $award->aw_type : old('aw_type') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('punish_type'))
                            <span class="help-block">
                            <strong>{!! $errors->first('punish_type') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{--//Description--}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group{!! $errors->has('description') ? ' has-error' : '' !!}">
                        <label for="description" class="control-label"><strong>ខ្លឹមសារ:</strong></label>
                        {{--{!! Form::textarea('aw_description[]', (isset($award->aw_description) ? $award->aw_description : null), array('placeholder' => 'សូមបញ្ចូលខ្លឹមសារ','class' => 'form-control', 'rows'=> '4')) !!}--}}
                        {{--<input type="text" name="aw_description[]" class="form-control">--}}
                        <textarea name="aw_description[]" id="" cols="10" rows="5" class="form-control"></textarea>
                        @if($errors->has('description'))
                            <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{--//Add more field--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? 'hidden' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                    <div class="form-group">
                        <button type="button" id="aw_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="aw_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
