<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:37 AM
 */
?>

{{--D.Status out of frame--}}
<div class="col-md-12 m-l-15">
    <h4>ឃ.ស្ថានភាពស្ថិតនៅក្រៅក្របខណ្ឌដើម</h4>
</div>
<div class="panel-body">
    {{--//Department--}}
    @if(isset($employer))
        @if(count($employer->outFrameNoSalary) >= 1)
            @foreach($employer->outFrameNoSalary as $outFrame)
                <div id="add_frame">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                            <label for="fn_department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                            <input type="text" name="fn_department[]" class="form-control" value="{!! isset($outFrame->fn_department) ? $outFrame->fn_department : old('fn_department[]') !!}" placeholder="សូមបញ្ចូលស្ថាប័ន/អង្គភាព">
                            {{--@if($errors->has('fn_department'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{!! $errors->first('fn_department') !!}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                            <label for="fn_start_date" class="control-label">
                                <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                            <div class="input-group">
                                <input type="text" name="fn_start_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_start_date) ? $outFrame->fn_start_date : old('fn_start_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i>
                                </span>
                                {{--@if($errors->has('fn_start_date'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{!! $errors->first('fn_start_date') !!}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>

                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                            <label for="fn_end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                <input type="text" name="fn_end_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_end_date) ? $outFrame->fn_end_date : old('fn_end_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                {{--@if($errors->has('fn_end_date'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{!! $errors->first('fn_end_date') !!}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                    </div>
                    {{--{!! Form::hidden('out_frame_id[]', (isset($outFrame->id) ? $outFrame->id : null)) !!}--}}
                </div>
            @endforeach
        @else
            <div id="more_frame">
                <div id="add_frame">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                            <label for="fn_department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                            <input type="text" name="fn_department[]" class="form-control" value="{!! isset($outFrame->fn_department) ? $outFrame->fn_department : old('fn_department[]') !!}" placeholder="សូមមេត្តាបញ្ចូលស្ថាប័ន/អង្គភាព">
                            {{--@if($errors->has('fn_department'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{!! $errors->first('fn_department') !!}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                            <label for="fn_start_date" class="control-label">
                                <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                            <div class="input-group">
                                <input type="text" name="fn_start_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_start_date) ? $outFrame->fn_start_date : old('fn_start_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                {{--@if($errors->has('fn_start_date'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{!! $errors->first('fn_start_date') !!}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                            <label for="fn_end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                <input type="text" name="fn_end_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_end_date) ? $outFrame->fn_end_date : old('fn_end_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                                <span class="input-group-addon bg-custom b-0 text-white"><i
                                            class="icon-calender"></i></span>
                                {{--@if($errors->has('fn_end_date'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{!! $errors->first('fn_end_date') !!}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--//Add more field--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="out_frame_div_add">
                        <div class="form-group">
                            <button type="button" id="out_frame_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                         id="out_frame_div_remove">
                        <div class="form-group">
                            <button type="button" id="out_frame_btn_remove"
                                    class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="more_frame">
            <div id="add_frame">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                        <label for="fn_department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                        <input type="text" name="fn_department[]" class="form-control" value="{!! isset($outFrame->fn_department) ? $outFrame->fn_department : old('fn_department[]') !!}" placeholder="សូមមេត្តាបញ្ចូលស្ថាប័ន/អង្គភាព">
                        {{--@if($errors->has('fn_department'))--}}
                        {{--<span class="help-block">--}}
                        {{--<strong>{!! $errors->first('fn_department') !!}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                        <label for="fn_start_date" class="control-label">
                            <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                        <div class="input-group">
                            <input type="text" name="fn_start_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_start_date) ? $outFrame->fn_start_date : old('fn_start_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                            {{--@if($errors->has('fn_start_date'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{!! $errors->first('fn_start_date') !!}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                        <label for="fn_end_date" class="control-label">
                            <strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            <input type="text" name="fn_end_date[]" class="form-control date_picker" value="{!! isset($outFrame->fn_end_date) ? $outFrame->fn_end_date : old('fn_end_date[]') !!}" placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                        class="icon-calender"></i></span>
                            {{--@if($errors->has('fn_end_date'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{!! $errors->first('fn_end_date') !!}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--//Add more field--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="out_frame_div_add">
                    <div class="form-group">
                        <button type="button" id="out_frame_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                     id="out_frame_div_remove">
                    <div class="form-group">
                        <button type="button" id="out_frame_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
