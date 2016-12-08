<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 5:22 PM
 */
?>
{{--A.Language--}}
<div id="ll_lang" class="row">
    @if(isset($employer))
        @if(count($employer->languageLevel) >= 1)
            @foreach($employer->languageLevel as $lang)
                <div class="panel-body" id="add_language">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('ll_lang_id') ? ' has-error' : '' !!}">
                            <label for="ll_lang_id" class="control-label">
                                <strong>ភាសា:</strong>
                            </label>
                            {!! Form::select('ll_lang_id[]', (isset($lang->ll_lang_id) ? (isset($lang->ll_lang_id) ? $language : null) : $language), (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => '--Select your known language--','class' => 'form-control')) !!}
                            {{--{!! Form::text('ll_lang_id', (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'ll_lang_id')) !!}--}}
                            @if($errors->has('ll_lang_id'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ll_lang_id') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Read--}}
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group{!! $errors->has('ll_read') ? ' has-error' : '' !!}">
                            <label for="el_school" class="control-label">
                                <strong>អាន:</strong>
                            </label>
                            {{--{!! Form::text('ll_read', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_read[]', (isset($lang->ll_read) ? (isset($lang->ll_read) ? $can_level : null) : $can_level), (isset($lang->ll_read) ? $lang->ll_read : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                            @if($errors->has('ll_read'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ll_read') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Write--}}
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group{!! $errors->has('ll_write') ? ' has-error' : '' !!}">
                            <label for="el_school" class="control-label">
                                <strong>សរសេរ:</strong>
                            </label>
                            {{--{!! Form::text('ll_write', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_write[]', (isset($lang->ll_write) ? (isset($lang->ll_write) ? $can_level : null) : $can_level), (isset($lang->ll_write) ? $lang->ll_write : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                            @if($errors->has('ll_write'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ll_write') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Listen--}}
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group{!! $errors->has('ll_listen') ? ' has-error' : '' !!}">
                            <label for="el_school" class="control-label">
                                <strong>ស្តាប់:</strong>
                            </label>
                            {{--{!! Form::text('ll_listen', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_listen[]', (isset($lang->ll_listen) ? (isset($lang->ll_listen) ? $can_level : null) : $can_level), (isset($lang->ll_listen) ? $lang->ll_listen : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                            @if($errors->has('ll_listen'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ll_listen') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Speak--}}
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group{!! $errors->has('ll_speak') ? ' has-error' : '' !!}">
                            <label for="el_school" class="control-label">
                                <strong>និយាយ:</strong>
                            </label>
                            {{--{!! Form::text('ll_speak', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_speak[]', (isset($lang->ll_speak) ? (isset($lang->ll_speak) ? $can_level : null) : $can_level), (isset($lang->ll_speak) ? $lang->ll_speak : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                            @if($errors->has('ll_speak'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('ll_speak') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    @else
        <div class="panel-body" id="add_language">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('ll_lang_id') ? ' has-error' : '' !!}">
                    <label for="ll_lang_id" class="control-label">
                        <strong>ភាសា:</strong>
                    </label>
                    {!! Form::select('ll_lang_id[]', (isset($lang->ll_lang_id) ? (isset($lang->ll_lang_id) ? $language : null) : $language), (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => '--Select your known language--','class' => 'form-control')) !!}
                    {{--{!! Form::text('ll_lang_id', (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'ll_lang_id')) !!}--}}
                    @if($errors->has('ll_lang_id'))
                        <span class="help-block">
                                    <strong>{!! $errors->first('ll_lang_id') !!}</strong>
                                </span>
                    @endif
                </div>
            </div>
            {{--//Read--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_read') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>អាន:</strong>
                    </label>
                    {{--{!! Form::text('ll_read', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_read[]', (isset($lang->ll_read) ? (isset($lang->ll_read) ? $can_level : null) : $can_level), (isset($lang->ll_read) ? $lang->ll_read : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_read'))
                        <span class="help-block">
                                    <strong>{!! $errors->first('ll_read') !!}</strong>
                                </span>
                    @endif
                </div>
            </div>
            {{--//Write--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_write') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>សរសេរ:</strong>
                    </label>
                    {{--{!! Form::text('ll_write', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_write[]', (isset($lang->ll_write) ? (isset($lang->ll_write) ? $can_level : null) : $can_level), (isset($lang->ll_write) ? $lang->ll_write : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_write'))
                        <span class="help-block">
                                    <strong>{!! $errors->first('ll_write') !!}</strong>
                                </span>
                    @endif
                </div>
            </div>
            {{--//Listen--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_listen') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>ស្តាប់:</strong>
                    </label>
                    {{--{!! Form::text('ll_listen', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_listen[]', (isset($lang->ll_listen) ? (isset($lang->ll_listen) ? $can_level : null) : $can_level), (isset($lang->ll_listen) ? $lang->ll_listen : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_listen'))
                        <span class="help-block">
                                    <strong>{!! $errors->first('ll_listen') !!}</strong>
                                </span>
                    @endif
                </div>
            </div>
            {{--//Speak--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_speak') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>និយាយ:</strong>
                    </label>
                    {{--{!! Form::text('ll_speak', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_speak[]', (isset($lang->ll_speak) ? (isset($lang->ll_speak) ? $can_level : null) : $can_level), (isset($lang->ll_speak) ? $lang->ll_speak : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_speak'))
                        <span class="help-block">
                                    <strong>{!! $errors->first('ll_speak') !!}</strong>
                                </span>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
