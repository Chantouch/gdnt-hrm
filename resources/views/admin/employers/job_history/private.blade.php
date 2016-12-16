<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 4:00 PM
 */
?>
{{--B.Private job--}}
<div class="col-md-12 m-l-15">
    <h4>ខ.ក្នុងវិស័យ​​ឯកជន</h4>
</div>
<div class="panel-body">
    {{--//Start date--}}
    @if(isset($employer))
        @if(count($employer->historyPrivateJob) >= 1)
            @foreach($employer->historyPrivateJob as $hpj)
                <div id="hpj_add_form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                            <label for="start_date" class="control-label">
                                <strong>ថ្ងៃចូល:</strong>
                            </label>
                            <div class="input-group">
                                {{--{!! Form::text('hpj_start_date[]', null, array('placeholder' => 'Select your start date','class' => 'form-control  date_picker')) !!}--}}
                                {!! Form::text('hpj_start_date[]', (isset($hpj->hpj_start_date) ? $hpj->hpj_start_date : null), array('placeholder' => 'Select your start date','class' => 'form-control  date_picker', 'id'=>'hpj_start_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                            <i class="icon-calender"></i></span>
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
                            <label for="end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong>
                            </label>
                            <div class="input-group">
                                {{--{!! Form::text('hpj_end_date[]', null, array('placeholder' => 'Select your end date','class' => 'form-control  date_picker')) !!}--}}
                                {!! Form::text('hpj_end_date[]', (isset($hpj->hpj_end_date) ? $hpj->hpj_end_date : null), array('placeholder' => 'Select your start date','class' => 'form-control  date_picker', 'id'=>'hpj_end_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                            <i class="icon-calender"></i></span>
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
                                <strong>គ្រឹះស្ថាន/អង្គភាព:</strong>
                            </label>
                            {{--{!! Form::text('hpj_ministry_institute[]', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}--}}
                            {!! Form::text('hpj_ministry_institute[]', (isset($hpj->hpj_ministry_institute) ? $hpj->hpj_ministry_institute : null), array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'hpj_ministry_institute')) !!}
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
                            <label for="occupation" class="control-label">
                                <strong>តួនាទី:</strong>
                            </label>
                            {{--{!! Form::text('hpj_occupation[]', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}--}}
                            {!! Form::text('hpj_occupation[]', (isset($hpj->hpj_occupation) ? $hpj->hpj_occupation : null), array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'hpj_occupation')) !!}
                            @if($errors->has('occupation'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('occupation') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--//Others--}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group{!! $errors->has('others') ? ' has-error' : '' !!}">
                            <label for="others" class="control-label">
                                <strong>ជំនាញ/បច្ចេកទេស:</strong>
                            </label>
                            {{--{!! Form::text('hpj_others[]', null, array('placeholder' => 'សូមបញ្ចូល ជំនាញ/បច្ចេកទេស','class' => 'form-control')) !!}--}}
                            {!! Form::text('hpj_others[]', (isset($hpj->hpj_others) ? $hpj->hpj_others : null), array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'hpj_others')) !!}
                            @if($errors->has('others'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('others') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--{!! Form::hidden('hpj_type[]', 'Private') !!}--}}
                </div>
            @endforeach
        @else
            <div id="hpj_form">
                <div id="hpj_add_form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                            <label for="start_date" class="control-label">
                                <strong>ថ្ងៃចូល:</strong>
                            </label>
                            <div class="input-group">
                                {!! Form::text('hpj_start_date[]', null, array('placeholder' => 'Select your start date','class' => 'form-control  date_picker', 'id' => 'hpj_start_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
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
                            <label for="end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong>
                            </label>
                            <div class="input-group">
                                {!! Form::text('hpj_end_date[]', null, array('placeholder' => 'Select your end date','class' => 'form-control  date_picker', 'id' => 'hpj_end_date')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
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
                                <strong>គ្រឹះស្ថាន/អង្គភាព:</strong>
                            </label>
                            {!! Form::text('hpj_ministry_institute[]', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}
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
                            <label for="occupation" class="control-label">
                                <strong>តួនាទី:</strong>
                            </label>
                            {!! Form::text('hpj_occupation[]', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}
                            @if($errors->has('occupation'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('occupation') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--//Others--}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group{!! $errors->has('others') ? ' has-error' : '' !!}">
                            <label for="others" class="control-label">
                                <strong>ជំនាញ/បច្ចេកទេស:</strong>
                            </label>
                            {!! Form::text('hpj_others[]', null, array('placeholder' => 'សូមបញ្ចូល ជំនាញ/បច្ចេកទេស','class' => 'form-control')) !!}
                            @if($errors->has('others'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('others') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--{!! Form::hidden('hpj_type[]', 'Private') !!}--}}
                </div>
            </div>
            {{--//Add more field--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="private_btn_add">
                        <div class="form-group">
                            <button type="button" id="hpj_btn_add" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                         id="private_btn_remove">
                        <div class="form-group">
                            <button type="button" id="hpj_btn_remove" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="hpj_form">
            <div id="hpj_add_form">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                        <label for="start_date" class="control-label">
                            <strong>ថ្ងៃចូល:</strong>
                        </label>
                        <div class="input-group">
                            {{--{!! Form::text('hpj_start_date[]', null, array('placeholder' => 'Select your start date','class' => 'form-control  date_picker', 'id' => 'hpj_start_date')) !!}--}}
                            <input type="text" name="hpj_start_date[]" class="form-control date_picker">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
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
                        <label for="end_date" class="control-label">
                            <strong>ថ្ងៃបញ្ចប់:</strong>
                        </label>
                        <div class="input-group">
                            {{--{!! Form::text('hpj_end_date[]', null, array('placeholder' => 'Select your end date','class' => 'form-control  date_picker', 'id' => 'hpj_end_date')) !!}--}}
                            <input type="text" name="hpj_end_date[]" class="form-control date_picker">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
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
                            <strong>គ្រឹះស្ថាន/អង្គភាព:</strong>
                        </label>
                        {{--{!! Form::text('hpj_ministry_institute[]', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}--}}
                        <input type="text" name="hpj_ministry_institute[]" class="form-control">
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
                        <label for="occupation" class="control-label">
                            <strong>តួនាទី:</strong>
                        </label>
                        {{--{!! Form::text('hpj_occupation[]', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}--}}
                        <input type="text" name="hpj_occupation[]" class="form-control">
                        @if($errors->has('occupation'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('occupation') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Others--}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group{!! $errors->has('others') ? ' has-error' : '' !!}">
                        <label for="others" class="control-label">
                            <strong>ជំនាញ/បច្ចេកទេស:</strong>
                        </label>
                        {{--{!! Form::text('hpj_others[]', null, array('placeholder' => 'សូមបញ្ចូល ជំនាញ/បច្ចេកទេស','class' => 'form-control')) !!}--}}
                        <input type="text" name="hpj_others[]" class="form-control">
                        @if($errors->has('others'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('others') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--{!! Form::hidden('hpj_type[]', 'Private') !!}--}}
            </div>
        </div>
        {{--//Add more field--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="private_btn_add">
                    <div class="form-group">
                        <button type="button" id="hpj_btn_add" class="btn btn-block btn-default">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                     id="private_btn_remove">
                    <div class="form-group">
                        <button type="button" id="hpj_btn_remove" class="btn btn-block btn-default">
                            <i class="fa fa-plus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>