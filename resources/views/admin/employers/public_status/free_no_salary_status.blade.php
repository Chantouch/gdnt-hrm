<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:38 AM
 */
?>

{{--E.Status of free no salary--}}
<div class="col-md-12 m-l-15">
    <h4>ង.ស្ថានភាពស្ថិតនៅភាពទំនេរគ្មានប្រាក់បៀវត្យ</h4>
</div>
<div class="panel-body">
    {{--//Department--}}
    <div id="nss_form_add">
        @if(isset($employer))
            @if(count($employer->noSalaryStatus) >=1)
                @foreach($employer->noSalaryStatus as $noSalary)
                    <div id="nss_form">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group{!! $errors->has('nss_department') ? ' has-error' : '' !!}">
                                <label for="nss_department" class="control-label">
                                    <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                                {{--{!! Form::text('nss_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                                {!! Form::text('nss_department[]', (isset($noSalary->nss_department) ? $noSalary->nss_department : null), array('placeholder' => 'សូមបញ្ចូលស្ថាប័ន/អង្គភាព','class' => 'form-control', 'id'=>'nss_department')) !!}
                                @if($errors->has('nss_department'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('nss_department') !!}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        {{--//Start date--}}
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group{!! $errors->has('nss_start_date') ? ' has-error' : '' !!}">
                                <label for="nss_start_date" class="control-label">
                                    <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                                <div class="input-group">
                                    {{--{!! Form::text('nss_start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control', 'id' => 'nss_start_date')) !!}--}}
                                    {!! Form::text('nss_start_date[]', (isset($noSalary->nss_start_date) ? $noSalary->nss_start_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម','class' => 'form-control nss_date_pickers', 'id'=>'nss_start_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white"><i
                                                class="icon-calender"></i></span>
                                    @if($errors->has('nss_start_date'))
                                        <span class="help-block">
                                                <strong>{!! $errors->first('nss_start_date') !!}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--//End date--}}
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group{!! $errors->has('nss_end_date') ? ' has-error' : '' !!}">
                                <label for="nss_end_date" class="control-label">
                                    <strong>ថ្ងៃបញ្ចប់:</strong></label>
                                <div class="input-group">
                                    {{--{!! Form::text('nss_end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control', 'id' => 'nss_end_date')) !!}--}}
                                    {!! Form::text('nss_end_date[]', (isset($noSalary->nss_end_date) ? $noSalary->nss_end_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃបញ្ចប់','class' => 'form-control nss_date_pickers', 'id'=>'nss_end_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white"><i
                                                class="icon-calender"></i></span>
                                    @if($errors->has('nss_end_date'))
                                        <span class="help-block">
                                                <strong>{!! $errors->first('nss_end_date') !!}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @else
            <div id="nss_form">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('nss_department') ? ' has-error' : '' !!}">
                        <label for="nss_department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                        {{--{!! Form::text('nss_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                        {!! Form::text('nss_department[]', (isset($employer->noSalaryStatus->nss_department) ? $employer->noSalaryStatus->nss_department : null), array('placeholder' => 'សូមបញ្ចូលស្ថាប័ន/អង្គភាព','class' => 'form-control', 'id'=>'nss_department')) !!}
                        @if($errors->has('nss_department'))
                            <span class="help-block">
                                        <strong>{!! $errors->first('nss_department') !!}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {{--//Start date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('nss_start_date') ? ' has-error' : '' !!}">
                        <label for="nss_start_date" class="control-label">
                            <strong>ថ្ងៃចាប់ផ្តើម:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('nss_start_date', null, array('placeholder' => 'Enter start date','class' => 'form-control', 'id' => 'nss_start_date')) !!}--}}
                            {!! Form::text('nss_start_date[]', (isset($employer->noSalaryStatus->nss_start_date) ? $employer->noSalaryStatus->nss_start_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម','class' => 'form-control nss_date_pickers', 'id'=>'nss_start_date')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                        class="icon-calender"></i></span>
                            @if($errors->has('nss_start_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('nss_start_date') !!}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('nss_end_date') ? ' has-error' : '' !!}">
                        <label for="nss_end_date" class="control-label">
                            <strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('nss_end_date', null, array('placeholder' => 'Enter end date','class' => 'form-control', 'id' => 'nss_end_date')) !!}--}}
                            {!! Form::text('nss_end_date[]', (isset($employer->noSalaryStatus->nss_end_date) ? $employer->noSalaryStatus->nss_end_date : null), array('placeholder' => 'សូមជ្រើសរើសថ្ងៃបញ្ចប់','class' => 'form-control nss_date_pickers', 'id'=>'nss_end_date')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white"><i
                                        class="icon-calender"></i></span>
                            @if($errors->has('nss_end_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('nss_end_date') !!}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{--//Add more field--}}
    <div class="row {!! Request::Segment(5) == 'edit' ? 'hidden' : '' !!}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                <div class="form-group">
                    <button type="button" id="nss_btn_add" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> បន្ថែម
                    </button>
                </div>
            </div>
            {{--//Remove last field--}}
            <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? 'hidden' : '' !!}"
                 id="no_salary_div_remove">
                <div class="form-group">
                    <button type="button" id="nss_btn_remove" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> ដកចេញ
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
