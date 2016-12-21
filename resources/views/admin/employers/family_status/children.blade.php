<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:43 AM
 */
?>
{{--//Children info--}}
<div class="col-md-12 m-l-15">
    <h4>ឃ.ព័ត៏មានកូន</h4>
</div>
<div class="panel-body">
    @if(isset($employer))
        @if(count($employer->children) >=1)
            @foreach($employer->children as $child)
                <div id="child_form_add">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_full_name') ? ' has-error' : '' !!}">
                            <label for="child_full_name" class="control-label">
                                <strong>គោត្តនាម និង នាម:</strong></label>
                            <input type="text" name="child_full_name[]" class="form-control" value="{!! isset($child->child_full_name) ? $child->child_full_name : old('child_full_name[]') !!}" placeholder="សូមបញ្ចូលគោត្តនៈនាមនិងនាម">
                            @if($errors->has('child_full_name'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('child_full_name') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_fn_en') ? ' has-error' : '' !!}">
                            <label for="child_fn_en" class="control-label"><strong>អក្សរឡាតាំង:</strong></label>
                              <input type="text" name="child_fn_en[]" class="form-control" value="{!! isset($child->child_fn_en) ? $child->child_fn_en : old('child_fn_en[]') !!}" placeholder="សូមបញ្ចូលជាអក្សរឡាតាំង">
                            @if($errors->has('child_fn_en'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('child_fn_en') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                        <input type="text" name="child_gender[]" class="form-control" value="{!! isset($child->child_gender) ? $child->child_gender : old('child_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('child_gender'))
                            <span class="help-block">
                                    <strong>{!! $errors->first('child_gender') !!}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_dob') ? ' has-error' : '' !!}">
                            <label for="child_dob" class="control-label">
                                <strong>ថ្ងៃខែកំណើត:</strong></label>
                            <div class="input-group">
                                <input type="text" name="child_dob[]" class="form-control date_picker" value="{!! isset($child->child_dob) ? $child->child_dob : old('child_dob[]') !!}" placeholder="yyyy-m-d">
                                <span class="input-group-addon bg-custom b-0 text-white"><i
                                            class="icon-calender"></i></span>
                                @if($errors->has('child_dob'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('child_dob') !!}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_job') ? ' has-error' : '' !!}">
                            <label for="child_job" class="control-label"><strong>បុខរបរ(អង្គភាព):</strong></label>
                            <input type="text" name="child_job[]" class="form-control" value="{!! isset($child->child_job) ? $child->child_job : old('child_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ននិងស្ថាប័នឬអង្គភាព">
                            @if($errors->has('child_job'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('child_job') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                        <input type="text" name="child_subsidy[]" class="form-control" value="{!! isset($child->child_subsidy) ? $child->child_subsidy : old('child_subsidy[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('child_subsidy'))
                            <span class="help-block">
                                    <strong>{!! $errors->first('child_subsidy') !!}</strong>
                                </span>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div id="child_form">
                <div id="child_form_add">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_full_name') ? ' has-error' : '' !!}">
                            <label for="child_full_name" class="control-label">
                                <strong>គោត្តនាម និង នាម:</strong>
                            </label>
                            <input type="text" name="child_full_name[]" class="form-control" value="{!! isset($child->child_full_name) ? $child->child_full_name : old('child_full_name[]') !!}" placeholder="សូមបញ្ចូលគោត្តនៈនាមនិងនាម">
                            @if($errors->has('child_full_name'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_full_name') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_fn_en') ? ' has-error' : '' !!}">
                            <label for="child_fn_en" class="control-label">
                                <strong>អក្សរឡាតាំង:</strong>
                            </label>
                            <input type="text" name="child_fn_en[]" class="form-control" value="{!! isset($child->child_fn_en) ? $child->child_fn_en : old('child_fn_en[]') !!}" placeholder="សូមបញ្ចូលជាអក្សរឡាតាំង">
                            @if($errors->has('child_fn_en'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_fn_en') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                        <input type="text" name="child_gender[]" class="form-control" value="{!! isset($child->child_gender) ? $child->child_gender : old('child_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('child_gender'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_gender') !!}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_dob') ? ' has-error' : '' !!}">
                            <label for="child_dob" class="control-label">
                                <strong>ថ្ងៃខែកំណើត:</strong></label>
                            <div class="input-group">
                                <input type="text" name="child_dob[]" class="form-control date_picker" value="{!! isset($child->child_dob) ? $child->child_dob : old('child_dob[]') !!}" placeholder="yyyy-m-d">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                                @if($errors->has('child_dob'))
                                    <span class="help-block">
                                        <strong>{!! $errors->first('child_dob') !!}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('child_job') ? ' has-error' : '' !!}">
                            <label for="child_job" class="control-label"><strong>បុខរបរ(អង្គភាព):</strong></label>
                            <input type="text" name="child_job[]" class="form-control" value="{!! isset($child->child_job) ? $child->child_job : old('child_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ននិងស្ថាប័នឬអង្គភាព">
                            @if($errors->has('child_job'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_job') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                        <input type="text" name="child_subsidy[]" class="form-control" value="{!! isset($child->child_subsidy) ? $child->child_subsidy : old('child_subsidy[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('child_subsidy'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_subsidy') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//Add more field--}}
            <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                        <div class="form-group">
                            <button type="button" id="child_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="child_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-minus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="child_form">
            <div id="child_form_add">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('child_full_name') ? ' has-error' : '' !!}">
                        <label for="child_full_name" class="control-label"><strong>គោត្តនាម និង នាម:</strong></label>
                        <input type="text" name="child_full_name[]" class="form-control" value="{!! isset($child->child_full_name) ? $child->child_full_name : old('child_full_name[]') !!}" placeholder="សូមបញ្ចូលគោត្តនៈនាមនិងនាម">
                        @if($errors->has('child_full_name'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_full_name') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('child_fn_en') ? ' has-error' : '' !!}">
                        <label for="child_fn_en" class="control-label"><strong>អក្សរឡាតាំង:</strong></label>
                        <input type="text" name="child_fn_en[]" class="form-control" value="{!! isset($child->child_fn_en) ? $child->child_fn_en : old('child_fn_en[]') !!}" placeholder="សូមបញ្ចូលជាអក្សរឡាតាំង">
                        @if($errors->has('child_fn_en'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_fn_en') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                    <input type="text" name="child_gender[]" class="form-control" value="{!! isset($child->child_gender) ? $child->child_gender : old('child_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                    @if($errors->has('child_gender'))
                        <span class="help-block">
                            <strong>{!! $errors->first('child_gender') !!}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('child_dob') ? ' has-error' : '' !!}">
                        <label for="child_dob" class="control-label">
                            <strong>ថ្ងៃខែកំណើត:</strong></label>
                        <div class="input-group">
                            <input type="text" name="child_dob[]" class="form-control" value="{!! isset($child->child_dob) ? $child->child_dob : old('child_dob[]') !!}" placeholder="yyyy-m-d">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i>
                            </span>
                            @if($errors->has('child_dob'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_dob') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('child_job') ? ' has-error' : '' !!}">
                        <label for="child_job" class="control-label"><strong>បុខរបរ(អង្គភាព):</strong></label>
                        <input type="text" name="child_job[]" class="form-control" value="{!! isset($child->child_job) ? $child->child_job : old('child_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ននិងស្ថាប័នឬអង្គភាព">
                        @if($errors->has('child_job'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_job') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                    <input type="text" name="child_subsidy[]" class="form-control" value="{!! isset($child->child_subsidy) ? $child->child_subsidy : old('child_subsidy[]') !!}" placeholder="--សូមជ្រើសរើស--">
                    @if($errors->has('child_subsidy'))
                        <span class="help-block">
                            <strong>{!! $errors->first('child_subsidy') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        {{--//Add more field--}}
        <div class="row {!! Request::Segment(5) == 'edit' ? '' : '' !!}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-2 col-md-2" id="no_salary_div_add">
                    <div class="form-group">
                        <button type="button" id="child_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="child_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
