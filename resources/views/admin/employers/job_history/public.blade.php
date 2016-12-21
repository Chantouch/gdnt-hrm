<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 3:59 PM
 */
?>
{{--A.Public job--}}
<div class="col-md-12 m-l-15">
    <h4>ក.ក្នុងមុខងារសាធារណៈ</h4>
</div>
<div class="panel-body">
    {{--//Start date--}}
    @if(isset($employer))
        @if(count($employer->jobHistoryPrivatePublic) >= 1)
            @foreach($employer->jobHistoryPrivatePublic as $history)
                @if($history->phj_type == 'Public')
                    <div id="public_form">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_start_date') ? ' has-error' : '' !!}">
                                <label for="phj_start_date" class="control-label">
                                    <strong>ថ្ងៃចូល:</strong>
                                </label>
                                <div class="input-group">
                                    <!-- {!! Form::text('phj_start_date[]', (isset($history->phj_start_date) ? $history->phj_start_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ','class' => 'form-control  date_picker', 'id'=>'phj_start_date')) !!} -->
                                    <input type="text" name="phj_start_date[]" class="form-control date_picker" value="{!! isset($history->phj_start_date) ? $history->phj_start_date : old('phj_start_date') !!}" placeholder="សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ">
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                            <i class="icon-calender"></i></span>
                                    @if($errors->has('phj_start_date'))
                                        <span class="help-block">
                                                    <strong>{!! $errors->first('phj_start_date') !!}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//End date--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_end_date') ? ' has-error' : '' !!}">
                                <label for="phj_end_date" class="control-label">
                                    <strong>ថ្ងៃឈប់:</strong>
                                </label>
                                <div class="input-group">
                                    <!-- {!! Form::text('phj_end_date[]', (isset($history->phj_end_date) ? $history->phj_end_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារ','class' => 'form-control  date_picker', 'id'=>'phj_end_date')) !!} -->
                                    <input type="text" name="phj_end_date[]" class="form-control date_picker" value="{!! isset($history->phj_end_date) ? $history->phj_end_date : old('phj_end_date') !!}" placeholder="សសូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារ">
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                            <i class="icon-calender"></i></span>
                                    @if($errors->has('phj_end_date'))
                                        <span class="help-block">
                                                    <strong>{!! $errors->first('phj_end_date') !!}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//Ministry institute--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_ministry_institute') ? ' has-error' : '' !!}">
                                <label for="phj_ministry_institute" class="control-label">
                                    <strong>ក្រសួង-ស្ថាប័ន:</strong>
                                </label>
                                <!-- {!! Form::text('phj_ministry_institute[]', (isset($history->phj_ministry_institute) ? $history->phj_ministry_institute : null), array('placeholder' => 'សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_ministry_institute')) !!} -->
                                <input type="text" name="phj_ministry_institute[]" class="form-control" value="{!! isset($history->phj_ministry_institute) ? $history->phj_ministry_institute : old('phj_ministry_institute') !!}" placeholder="សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ">
                                @if($errors->has('phj_ministry_institute'))
                                    <span class="help-block">
                                                <strong>{!! $errors->first('phj_ministry_institute') !!}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                        {{--//Department--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_department') ? ' has-error' : '' !!}">
                                <label for="phj_department" class="control-label">
                                    <strong>អង្គភាព:</strong>
                                </label>
                                <!-- {!! Form::text('phj_department[]', (isset($history->phj_department) ? $history->phj_department : null), array('placeholder' => 'សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_department')) !!} -->
                                <input type="text" name="phj_department[]" class="form-control" value="{!! isset($history->phj_department) ? $history->phj_department : old('phj_department') !!}" placeholder="សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ">
                                @if($errors->has('phj_department'))
                                    <span class="help-block">
                                                <strong>{!! $errors->first('phj_department') !!}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                        {{--//position--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_occupation') ? ' has-error' : '' !!}">
                                <label for="phj_occupation" class="control-label">
                                    <strong>មុខតំណែង:</strong>
                                </label>
                                <!-- {!! Form::text('phj_occupation[]', (isset($history->phj_occupation) ? $history->phj_occupation : null), array('placeholder' => 'សូមបំពេញ មុខតំណែងដែលបានកាន់កាប់','class' => 'form-control', 'id'=>'phj_occupation')) !!} -->
                                <input type="text" name="phj_occupation[]" class="form-control" value="{!! isset($history->phj_occupation) ? $history->phj_occupation : old('phj_occupation') !!}" placeholder="សូមបញ្ចូល មុខតំណែងដែលបានកាន់កាប់">
                                @if($errors->has('phj_occupation'))
                                    <span class="help-block">
                                                <strong>{!! $errors->first('phj_occupation') !!}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                        {{--//Others--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('phj_others') ? ' has-error' : '' !!}">
                                <label for="phj_others" class="control-label">
                                    <strong>ផ្សេងៗ:</strong></label>
                                <!-- {!! Form::text('phj_others[]', (isset($history->phj_others) ? $history->phj_others : null), array('placeholder' => 'បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ','class' => 'form-control', 'id'=>'phj_others')) !!} -->
                                <input type="text" name="phj_others[]" class="form-control" value="{!! isset($history->phj_others) ? $history->phj_others : old('phj_others') !!}" placeholder="បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ">
                                @if($errors->has('phj_others'))
                                    <span class="help-block">
                                                <strong>{!! $errors->first('phj_others') !!}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div id="public_add_form">
                <div id="public_form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_start_date') ? ' has-error' : '' !!}">
                            <label for="phj_start_date" class="control-label">
                                <strong>ថ្ងៃចូល:</strong>
                            </label>
                            <div class="input-group">
                                <!-- {!! Form::text('phj_start_date[]', (isset($employer->jobHistoryPrivatePublic->phj_start_date) ? $employer->jobHistoryPrivatePublic->phj_start_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ','class' => 'form-control  date_picker', 'id'=>'phj_start_date')) !!} -->
                                <input type="text" name="phj_start_date[]" class="form-control date_picker" value="{!! isset($history->phj_start_date) ? $history->phj_start_date : old('phj_start_date') !!}" placeholder="សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i>
                                    </span>
                                @if($errors->has('phj_start_date'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('phj_start_date') !!}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_end_date') ? ' has-error' : '' !!}">
                            <label for="phj_end_date" class="control-label">
                                <strong>ថ្ងៃឈប់:</strong>
                            </label>
                            <div class="input-group">
                                <!-- {!! Form::text('phj_end_date[]', (isset($employer->jobHistoryPrivatePublic->phj_end_date) ? $employer->jobHistoryPrivatePublic->phj_end_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារ','class' => 'form-control  date_picker', 'id'=>'phj_end_date')) !!} -->
                                <input type="text" name="phj_end_date[]" class="form-control date_picker" value="{!! isset($history->phj_end_date) ? $history->phj_end_date : old('phj_end_date') !!}" placeholder="សូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារះ">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i>
                                    </span>
                                @if($errors->has('phj_end_date'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('phj_end_date') !!}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--//Ministry institute--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_ministry_institute') ? ' has-error' : '' !!}">
                            <label for="phj_ministry_institute" class="control-label">
                                <strong>ក្រសួង-ស្ថាប័ន:</strong>
                            </label>
                            <!-- {!! Form::text('phj_ministry_institute[]', (isset($employer->jobHistoryPrivatePublic->phj_ministry_institute) ? $employer->jobHistoryPrivatePublic->phj_ministry_institute : null), array('placeholder' => 'សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_ministry_institute')) !!} -->
                            <input type="text" name="phj_ministry_institute[]" class="form-control" value="{!! isset($history->phj_ministry_institute) ? $history->phj_ministry_institute : old('phj_ministry_institute') !!}" placeholder="សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ">
                            @if($errors->has('phj_ministry_institute'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('phj_ministry_institute') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--//Department--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_department') ? ' has-error' : '' !!}">
                            <label for="phj_department" class="control-label">
                                <strong>អង្គភាព:</strong>
                            </label>
                            <!-- {!! Form::text('phj_department[]', (isset($employer->jobHistoryPrivatePublic->phj_department) ? $employer->jobHistoryPrivatePublic->phj_department : null), array('placeholder' => 'សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_department')) !!} -->
                            <input type="text" name="phj_department[]" class="form-control" value="{!! isset($history->phj_department) ? $history->phj_department : old('phj_department') !!}" placeholder="សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ">
                            @if($errors->has('phj_department'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('phj_department') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--//Position--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_occupation') ? ' has-error' : '' !!}">
                            <label for="phj_occupation" class="control-label">
                                <strong>មុខតំណែង:</strong>
                            </label>
                            <!-- {!! Form::text('phj_occupation[]', (isset($employer->jobHistoryPrivatePublic->phj_occupation) ? $employer->jobHistoryPrivatePublic->phj_occupation : null), array('placeholder' => 'សូមបំពេញ មុខតំណែងដែលបានកាន់កាប់','class' => 'form-control', 'id'=>'phj_occupation')) !!} -->
                            <input type="text" name="phj_occupation[]" class="form-control" value="{!! isset($history->phj_occupation) ? $history->phj_occupation : old('phj_occupation') !!}" placeholder="សូមបំពេញ មុខតំណែងដែលបានកាន់កាប់">
                            @if($errors->has('phj_occupation'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('phj_occupation') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--//Others--}}
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('phj_others') ? ' has-error' : '' !!}">
                            <label for="phj_others" class="control-label">
                                <strong>ផ្សេងៗ:</strong>
                            </label>
                            <!-- {!! Form::text('phj_others[]', (isset($employer->jobHistoryPrivatePublic->phj_others) ? $employer->jobHistoryPrivatePublic->phj_others : null), array('placeholder' => 'បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ','class' => 'form-control', 'id'=>'phj_others')) !!} -->
                            <input type="text" name="phj_others[]" class="form-control" value="{!! isset($history->phj_others) ? $history->phj_others : old('phj_others') !!}" placeholder="បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ">
                            @if($errors->has('phj_others'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('phj_others') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {!! Form::hidden('phj_type[]', 'Public', ['id'=> 'phj_type']) !!}
                </div>
            </div>
            {{--Add more fields--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="public_div_add">
                        <div class="form-group">
                            <button type="button" id="phj_btn_add" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                         id="public_div_remove">
                        <div class="form-group">
                            <button type="button" id="phj_btn_remove"
                                    class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="public_add_form">
            <div id="public_form">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_start_date') ? ' has-error' : '' !!}">
                        <label for="phj_start_date" class="control-label">
                            <strong>ថ្ងៃចូល:</strong>
                        </label>
                        <div class="input-group">
                            {{--{!! Form::text('phj_start_date[]', (isset($employer->jobHistoryPrivatePublic->phj_start_date) ? $employer->jobHistoryPrivatePublic->phj_start_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ','class' => 'form-control  date_picker', 'id'=>'phj_start_date')) !!}--}}
                            <input type="text" name="phj_start_date[]" class="form-control date_picker" value="{!! isset($history->phj_start_date) ? $history->phj_start_date : old('phj_start_date') !!}" placeholder="សូមជ្រើសរើស ថ្ងៃចាប់ផ្តើមការងារ">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i>
                                    </span>
                            @if($errors->has('phj_start_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('phj_start_date') !!}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_end_date') ? ' has-error' : '' !!}">
                        <label for="phj_end_date" class="control-label">
                            <strong>ថ្ងៃឈប់:</strong>
                        </label>
                        <div class="input-group">
                            {{--{!! Form::text('phj_end_date[]', (isset($employer->jobHistoryPrivatePublic->phj_end_date) ? $employer->jobHistoryPrivatePublic->phj_end_date : null), array('placeholder' => 'សូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារ','class' => 'form-control  date_picker', 'id'=>'phj_end_date')) !!}--}}
                            <input type="text" name="phj_end_date[]" class="form-control date_picker" value="{!! isset($history->phj_end_date) ? $history->phj_end_date : old('phj_end_date') !!}" placeholder="សូមជ្រើសរើស ថ្ងៃបញ្ចប់ការងារ">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i>
                                    </span>
                            @if($errors->has('phj_end_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('phj_end_date') !!}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//Ministry institute--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_ministry_institute') ? ' has-error' : '' !!}">
                        <label for="phj_ministry_institute" class="control-label">
                            <strong>ក្រសួង-ស្ថាប័ន:</strong>
                        </label>
                        {{--{!! Form::text('phj_ministry_institute[]', (isset($employer->jobHistoryPrivatePublic->phj_ministry_institute) ? $employer->jobHistoryPrivatePublic->phj_ministry_institute : null), array('placeholder' => 'សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_ministry_institute')) !!}--}}
                        <input type="text" name="phj_ministry_institute[]" class="form-control" value="{!! isset($history->phj_ministry_institute) ? $history->phj_ministry_institute : old('phj_ministry_institute') !!}" placeholder="សូមបញ្ចូល ក្រសួងឬស្ថាប័នដែលបំពេញការងារ">
                        @if($errors->has('phj_ministry_institute'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('phj_ministry_institute') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Department--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_department') ? ' has-error' : '' !!}">
                        <label for="phj_department" class="control-label">
                            <strong>អង្គភាព:</strong>
                        </label>
                        {{--{!! Form::text('phj_department[]', (isset($employer->jobHistoryPrivatePublic->phj_department) ? $employer->jobHistoryPrivatePublic->phj_department : null), array('placeholder' => 'សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ','class' => 'form-control', 'id'=>'phj_department')) !!}--}}
                        <input type="text" name="phj_department[]" class="form-control" value="{!! isset($history->phj_department) ? $history->phj_department : old('phj_department') !!}" placeholder="សូមបញ្ចូល អង្គភាពដែលបំពេញការងារ">
                        @if($errors->has('phj_department'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('phj_department') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Position--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_occupation') ? ' has-error' : '' !!}">
                        <label for="phj_occupation" class="control-label">
                            <strong>មុខតំណែង:</strong>
                        </label>
                        {{--{!! Form::text('phj_occupation[]', (isset($employer->jobHistoryPrivatePublic->phj_occupation) ? $employer->jobHistoryPrivatePublic->phj_occupation : null), array('placeholder' => 'សូមបំពេញ មុខតំណែងដែលបានកាន់កាប់','class' => 'form-control', 'id'=>'phj_occupation')) !!}--}}
                        <input type="text" name="phj_occupation[]" class="form-control" value="{!! isset($history->phj_occupation) ? $history->phj_occupation : old('phj_occupation') !!}" placeholder="សូមបញ្ចូល មុខតំណែងដែលបានកាន់កាប់">
                        @if($errors->has('phj_occupation'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('phj_occupation') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Others--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('phj_others') ? ' has-error' : '' !!}">
                        <label for="phj_others" class="control-label">
                            <strong>ផ្សេងៗ:</strong>
                        </label>
                        {{--{!! Form::text('phj_others[]', (isset($employer->jobHistoryPrivatePublic->phj_others) ? $employer->jobHistoryPrivatePublic->phj_others : null), array('placeholder' => 'បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ','class' => 'form-control', 'id'=>'phj_others')) !!}--}}
                        <input type="text" name="phj_others[]" class="form-control" value="{!! isset($history->phj_others) ? $history->phj_others : old('phj_others') !!}" placeholder="បើមានអ្វីផ្សេង សូមបញ្ចូលនៅទីនេះ">
                        @if($errors->has('phj_others'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('phj_others') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{--Add more fields--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="public_div_add">
                    <div class="form-group">
                        <button type="button" id="phj_btn_add" class="btn btn-block btn-default">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                     id="public_div_remove">
                    <div class="form-group">
                        <button type="button" id="phj_btn_remove"
                                class="btn btn-block btn-default">
                            <i class="fa fa-plus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
