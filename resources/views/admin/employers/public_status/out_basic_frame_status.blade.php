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
    <div id="more_frame">
        @if(count($employer->outFrameNoSalary) >= 1)
            @foreach($employer->outFrameNoSalary as $outFrame)
                <div id="add_frame">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                            <label for="fn_department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                            {{--{!! Form::text('fn_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                            {!! Form::text('fn_department[]', (isset($outFrame->fn_department) ? $outFrame->fn_department : null), array('placeholder' => 'សូមមេត្តាបញ្ចូលស្ថាប័ន/អង្គភាព','class' => 'form-control', 'id'=>'fn_department')) !!}
                            @if($errors->has('fn_department'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('fn_department') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--//Start date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                            <label for="fn_start_date" class="control-label">
                                <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('fn_start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control', 'id'=>'fn_start_date')) !!}--}}
                                {!! Form::text('fn_start_date[]', (isset($outFrame->fn_start_date) ? $outFrame->fn_start_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម','class' => 'form-control mydatepickers', 'id'=>'datepicker')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                @if($errors->has('fn_start_date'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('fn_start_date') !!}</strong>
                                        </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                            <label for="fn_end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('fn_end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control', 'id'=>'fn_end_date')) !!}--}}
                                {!! Form::text('fn_end_date[]', (isset($outFrame->fn_end_date) ? $outFrame->fn_end_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃបញ្ចប់','class' => 'form-control mydatepickers', 'id'=>'datepicker')) !!}
                                <span class="input-group-addon bg-custom b-0 text-white"><i
                                            class="icon-calender"></i></span>
                                @if($errors->has('fn_end_date'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('fn_end_date') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--{!! Form::hidden('out_frame_id[]', (isset($outFrame->id) ? $outFrame->id : null)) !!}--}}
                </div>
            @endforeach
        @else
            <div id="add_frame">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_department') ? ' has-error' : '' !!}">
                        <label for="fn_department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                        {{--{!! Form::text('fn_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                        {!! Form::text('fn_department[]', null, array('placeholder' => 'សូមមេត្តាបញ្ចូលស្ថាប័ន/អង្គភាព','class' => 'form-control', 'id'=>'fn_department')) !!}
                        @if($errors->has('fn_department'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('fn_department') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_start_date') ? ' has-error' : '' !!}">
                        <label for="fn_start_date" class="control-label">
                            <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('fn_start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control', 'id'=>'fn_start_date')) !!}--}}
                            {!! Form::text('fn_start_date[]', null, array('placeholder' => 'សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម','class' => 'form-control mydatepickers', 'id'=>'datepicker')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                            @if($errors->has('fn_start_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('fn_start_date') !!}</strong>
                                        </span>
                            @endif
                        </div>

                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('fn_end_date') ? ' has-error' : '' !!}">
                        <label for="fn_end_date" class="control-label">
                            <strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('fn_end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control', 'id'=>'fn_end_date')) !!}--}}
                            {!! Form::text('fn_end_date[]', null, array('placeholder' => 'សូមជ្រើសរើសថ្ងៃបញ្ចប់','class' => 'form-control mydatepickers', 'id'=>'datepicker')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                        class="icon-calender"></i></span>
                            @if($errors->has('fn_end_date'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('fn_end_date') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{--//Add more field--}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-2" id="out_frame_div_add">
                <div class="form-group">
                    <button type="button" id="out_frame_btn_add" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> បន្ថែម
                    </button>
                </div>
            </div>
            {{--//Remove last field--}}
            <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? 'hidden' : '' !!}"
                 id="out_frame_div_remove">
                <div class="form-group">
                    <button type="button" id="out_frame_btn_remove" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> ដកចេញ
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

