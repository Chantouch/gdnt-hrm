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
    @if(isset($employer))
        @if(count($employer->noSalaryStatus) >=1)
            @foreach($employer->noSalaryStatus as $noSalary)
                <div id="nss_form">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('nss_department') ? ' has-error' : '' !!}">
                            <label for="nss_department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                            <input type="text" name="nss_department[]" class="form-control"
                                   value="{!! isset($noSalary->nss_department) ? $noSalary->nss_department : old('nss_department[]') !!}"
                                   placeholder="សូមបញ្ចូលស្ថាប័ន/អង្គភាព">
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
                                <input type="text" name="nss_start_date[]" class="form-control date_picker"
                                       value="{!! isset($noSalary->nss_start_date) ? $noSalary->nss_start_date : old('nss_start_date[]') !!}"
                                       placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                            </div>
                            @if($errors->has('nss_start_date'))
                                <span class="help-block">
                                                <strong>{!! $errors->first('nss_start_date') !!}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('nss_end_date') ? ' has-error' : '' !!}">
                            <label for="nss_end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                <input type="text" name="nss_end_date[]" class="form-control date_picker"
                                       value="{!! isset($noSalary->nss_end_date) ? $noSalary->nss_end_date : old('nss_end_date[]') !!}"
                                       placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                            </div>
                            @if($errors->has('nss_end_date'))
                                <span class="help-block">
                                                <strong>{!! $errors->first('nss_end_date') !!}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="nss_form_add">
                <div id="nss_form">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('nss_department') ? ' has-error' : '' !!}">
                            <label for="nss_department" class="control-label">
                                <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                            <input type="text" name="nss_department[]" class="form-control"
                                   value="{!! isset($noSalary->nss_department) ? $noSalary->nss_department : old('nss_department[]') !!}"
                                   placeholder="សូមបញ្ចូលស្ថាប័ន/អង្គភាព">
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
                                <input type="text" name="nss_start_date[]" class="form-control date_picker"
                                       value="{!! isset($noSalary->nss_start_date) ? $noSalary->nss_start_date : old('nss_start_date[]') !!}"
                                       placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                                <span class="input-group-addon bg-custom b-0 text-white"><i
                                            class="icon-calender"></i></span>
                            </div>
                            @if($errors->has('nss_start_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('nss_start_date') !!}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>
                    {{--//End date--}}
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('nss_end_date') ? ' has-error' : '' !!}">
                            <label for="nss_end_date" class="control-label">
                                <strong>ថ្ងៃបញ្ចប់:</strong></label>
                            <div class="input-group">
                                <input type="text" name="nss_end_date[]" class="form-control date_picker"
                                       value="{!! isset($noSalary->nss_end_date) ? $noSalary->nss_end_date : old('nss_end_date[]') !!}"
                                       placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                                <span class="input-group-addon bg-custom b-0 text-white"><i
                                            class="icon-calender"></i></span>
                            </div>
                            @if($errors->has('nss_end_date'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('nss_end_date') !!}</strong>
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
                            <button type="button" id="nss_btn_add"
                                    class="btn btn-block btn-default waves-effect">

                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                         id="no_salary_div_remove">
                        <div class="form-group">

                            <button type="button" id="nss_btn_remove"
                                    class="btn btn-block btn-default waves-effect">

                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="nss_form_add">
            <div id="nss_form">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('nss_department') ? ' has-error' : '' !!}">
                        <label for="nss_department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព:</strong></label>
                        <input type="text" name="nss_department[]" class="form-control"
                               value="{!! isset($noSalary->nss_department) ? $noSalary->nss_department : old('nss_department[]') !!}"
                               placeholder="សូមបញ្ចូលស្ថាប័ន/អង្គភាព">
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
                            <input type="text" name="nss_start_date[]" class="form-control date_picker"
                                   value="{!! isset($noSalary->nss_start_date) ? $noSalary->nss_start_date : old('nss_start_date[]') !!}"
                                   placeholder="សូមជ្រើសរើសថ្ងៃចាប់ផ្តើម">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                        </div>
                        @if($errors->has('nss_start_date'))
                            <span class="help-block">
                                            <strong>{!! $errors->first('nss_start_date') !!}</strong>
                                        </span>
                        @endif
                    </div>
                </div>
                {{--//End date--}}
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group{!! $errors->has('nss_end_date') ? ' has-error' : '' !!}">
                        <label for="nss_end_date" class="control-label">
                            <strong>ថ្ងៃបញ្ចប់:</strong></label>
                        <div class="input-group">
                            <input type="text" name="nss_end_date[]" class="form-control date_picker"
                                   value="{!! isset($noSalary->nss_end_date) ? $noSalary->nss_end_date : old('nss_end_date[]') !!}"
                                   placeholder="សូមជ្រើសរើសថ្ងៃបញ្ចប់">
                            <span class="input-group-addon bg-custom b-0 text-white">
                              <i class="icon-calender"></i></span>
                        </div>
                        @if($errors->has('nss_end_date'))
                            <span class="help-block">
                                            <strong>{!! $errors->first('nss_end_date') !!}</strong>
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

                        <button type="button" id="nss_btn_add" class="btn btn-block btn-default waves-effect">

                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2 {!! (Request::Segment(5) == 'edit') ? '' : '' !!}"
                     id="no_salary_div_remove">
                    <div class="form-group">

                        <button type="button" id="nss_btn_remove"
                                class="btn btn-block btn-default waves-effect">

                            <i class="fa fa-plus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
