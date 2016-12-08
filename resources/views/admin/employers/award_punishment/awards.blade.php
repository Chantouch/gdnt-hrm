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
    <div id="award_form">
        @if(count($employer->awards) >= 1)
            @foreach($employer->awards as $award)
                <div id="award_form_add">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                            <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                            {!! Form::text('aw_doc_number[]', (isset($award->aw_doc_number) ? $award->aw_doc_number : null), array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}
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
                                {!! Form::text('aw_published_date[]', (isset($award->aw_published_date) ? $award->aw_published_date : null), array('placeholder' => 'Select your published date','class' => 'form-control aw_date_picker')) !!}
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
                            {!! Form::text('aw_department[]', (isset($award->aw_department) ? $award->aw_department : null), array('placeholder' => 'Enter department','class' => 'form-control')) !!}
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
                            {!! Form::select('aw_type[]', (isset($award->aw_type) ? (isset($award->aw_type) ? $types : null) : $types), (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'Select Type','class' => 'form-control')) !!}
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
                            {!! Form::textarea('aw_description[]', (isset($award->aw_description) ? $award->aw_description : null), array('placeholder' => 'Enter your description','class' => 'form-control', 'rows'=> '4')) !!}
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
            <div id="award_form_add">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                        <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                        {!! Form::text('aw_doc_number[]', (isset($award->aw_doc_number) ? $award->aw_doc_number : null), array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}
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
                            {!! Form::text('aw_published_date[]', (isset($award->aw_published_date) ? $award->aw_published_date : null), array('placeholder' => 'Select your published date','class' => 'form-control aw_date_picker')) !!}
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
                        {!! Form::text('aw_department[]', (isset($award->aw_department) ? $award->aw_department : null), array('placeholder' => 'Enter department','class' => 'form-control')) !!}
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
                        {!! Form::text('aw_type[]', (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'Select your punish_type','class' => 'form-control')) !!}
                        {{--{!! Form::select('aw_type[]', (isset($award->aw_type) ? (isset($award->aw_type) ? $types : null) : $types), (isset($award->aw_type) ? $award->aw_type : null), array('placeholder' => 'Select Type','class' => 'form-control')) !!}--}}
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
                        {!! Form::textarea('aw_description[]', (isset($award->aw_description) ? $award->aw_description : null), array('placeholder' => 'Enter your description','class' => 'form-control', 'rows'=> '4')) !!}
                        @if($errors->has('description'))
                            <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{--//Add more field--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                <div class="form-group">
                    <button type="button" id="aw_btn_add" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> បន្ថែម
                    </button>
                </div>
            </div>
            {{--//Remove last field--}}
            <div class="col-xs-12 col-sm-2 col-md-2"
                 id="no_salary_div_remove">
                <div class="form-group">
                    <button type="button" id="aw_btn_remove" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> ដកចេញ
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
