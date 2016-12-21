<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:42 AM
 */
?>

{{--//B.Siblings info--}}
<div class="col-md-12 m-l-15">
    <h4>ខ.ព័ត៏មានបងប្អូន</h4>
</div>
<div class="panel-body">
    @if(isset($employer))
        @if(count($employer->siblings) >= 1)
            @foreach($employer->siblings as $sibling)
                <div id="sibling_form_add">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('sib_full_name') ? ' has-error' : '' !!}">
                            <label for="sib_full_name" class="control-label"><strong>គោត្តនាម-នាម:</strong></label>
                            {{--{!! Form::text('sib_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_full_name[]', (isset($sibling->sib_full_name)? $sibling->sib_full_name : null), array('placeholder' => 'សូមបញ្ចូលគោត្តនៈនាមនិងនាម','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_full_name[]" class="form-control" value="{!! isset($sibling->sib_full_name) ? $sibling->sib_full_name : old('sib_full_name[]') !!}" placeholder="សូមបញ្ចូលគោត្តនៈនាមនិងនាម">
                            @if($errors->has('sib_full_name'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('sib_full_name') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('sib_fn_en') ? ' has-error' : '' !!}">
                            <label for="sib_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
                            {{--{!! Form::text('sib_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_fn_en[]', (isset($sibling->sib_fn_en)? $sibling->sib_fn_en : null), array('placeholder' => 'សូមបញ្ចូលជាអក្សរឡាតាំង','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_fn_en[]" class="form-control" value="{!! isset($sibling->sib_fn_en) ? $sibling->sib_fn_en : old('sib_fn_en[]') !!}" placeholder="សូមបញ្ចូលជាអក្សរឡាតាំង">
                            @if($errors->has('sib_fn_en'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('sib_fn_en') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="sib_gender" class="control-label col-md-12">ភេទ:</label>
                        <!-- {!! Form::select('sib_gender[]', (isset($sibling->sib_gender) ? (isset($sibling->sib_gender) ? $gender : null) : $gender), (isset($sibling->sib_gender) ? $sibling->sib_gender : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!} -->
                        <input type="text" name="sib_gender[]" class="form-control" value="{!! isset($sibling->sib_gender) ? $sibling->sib_gender : old('sib_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('sib_gender'))
                            <span class="help-block">
                                    <strong>{!! $errors->first('sib_gender') !!}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('sib_dob') ? ' has-error' : '' !!}">
                            <label for="sib_dob" class="control-label">
                                <strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('sib_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'sib_dob')) !!}--}}
                                <!-- {!! Form::text('sib_dob[]', (isset($sibling->sib_dob)? $sibling->sib_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'sib_dob')) !!} -->
                                <input type="text" name="sib_dob[]" class="form-control" value="{!! isset($sibling->sib_dob) ? $sibling->sib_dob : old('sib_dob[]') !!}" placeholder="yyyy-m-d">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                        <i class="icon-calender"></i></span>
                                @if($errors->has('sib_dob'))
                                    <span class="help-block">
                                            <strong>{!! $errors->first('sib_dob') !!}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('sib_job') ? ' has-error' : '' !!}">
                            <label for="sib_job" class="control-label"><strong>មុខរបរ:</strong></label>
                            {{--{!! Form::text('sib_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_job[]', (isset($sibling->sib_job)? $sibling->sib_job : null), array('placeholder' => 'សូមបញ្ចូលមុខរបរបច្ចុប្បន្ន ជាមួយនិងស្ថាប័នឬអង្គភាព','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_job[]" class="form-control" value="{!! isset($sibling->sib_job) ? $sibling->sib_job : old('sib_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ន ជាមួយនិងស្ថាប័នឬអង្គភាព">
                            @if($errors->has('sib_job'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('sib_job') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div id="sibling_form">
                <div id="sibling_form_add">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('sib_full_name') ? ' has-error' : '' !!}">
                            <label for="sib_full_name" class="control-label"><strong>គោត្តនាម-នាម:</strong></label>
                            {{--{!! Form::text('sib_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_full_name[]', (isset($employer->siblings->sib_full_name)? $employer->siblings->sib_full_name : null), array('placeholder' => 'សូមបញ្ចូលគោត្តនៈនាមនិងនាម','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_full_name[]" class="form-control" value="{!! isset($sibling->sib_full_name) ? $sibling->sib_full_name : old('sib_full_name[]') !!}" placeholder="សូមបញ្ចូលគោត្តនៈនាមនិងនាម">
                            @if($errors->has('sib_full_name'))
                                <span class="help-block">
                                <strong>{!! $errors->first('sib_full_name') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group{!! $errors->has('sib_fn_en') ? ' has-error' : '' !!}">
                            <label for="sib_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
                            {{--{!! Form::text('sib_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_fn_en[]', (isset($employer->siblings->sib_fn_en)? $employer->siblings->sib_fn_en : null), array('placeholder' => 'សូមបញ្ចូលឈ្មោះឡាតាំង','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_fn_en[]" class="form-control" value="{!! isset($sibling->sib_fn_en) ? $sibling->sib_fn_en : old('sib_fn_en[]') !!}" placeholder="សូមបញ្ចូលឈ្មោះឡាតាំង">
                            @if($errors->has('sib_fn_en'))
                                <span class="help-block">
                                <strong>{!! $errors->first('sib_fn_en') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="sib_gender" class="control-label col-md-12">ភេទ:</label>
                        <!-- {!! Form::select('sib_gender[]', (isset($employer->siblings->sib_gender) ? (isset($employer->siblings->sib_gender) ? $gender : null) : $gender), (isset($employer->siblings->sib_gender) ? $employer->siblings->sib_gender : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!} -->
                        <input type="text" name="sib_gender[]" class="form-control" value="{!! isset($sibling->sib_gender) ? $sibling->sib_gender : old('sib_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                        @if($errors->has('sib_gender'))
                            <span class="help-block">
                            <strong>{!! $errors->first('sib_gender') !!}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('sib_dob') ? ' has-error' : '' !!}">
                            <label for="sib_dob" class="control-label">
                                <strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
                            <div class="input-group">
                                {{--{!! Form::text('sib_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'sib_dob')) !!}--}}
                                <!-- {!! Form::text('sib_dob[]', (isset($employer->siblings->sib_dob)? $employer->siblings->sib_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'sib_dob')) !!} -->
                                <input type="text" name="sib_dob[]" class="form-control" value="{!! isset($sibling->sib_dob) ? $sibling->sib_dob : old('sib_dob[]') !!}" placeholder="yyyy-m-d">
                                <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                                @if($errors->has('sib_dob'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('sib_dob') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group{!! $errors->has('sib_job') ? ' has-error' : '' !!}">
                            <label for="sib_job" class="control-label"><strong>មុខរបរ:</strong></label>
                            {{--{!! Form::text('sib_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                            <!-- {!! Form::text('sib_job[]', (isset($employer->siblings->sib_job)? $employer->siblings->sib_job : null), array('placeholder' => 'សូមបញ្ចូលមុខរបរបច្ចុប្បន្ន ជាមួយនិងស្ថាប័នឬអង្គភាព','class' => 'form-control')) !!} -->
                            <input type="text" name="sib_job[]" class="form-control" value="{!! isset($sibling->sib_job) ? $sibling->sib_job : old('sib_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ន ជាមួយនិងស្ថាប័នឬអង្គភាព">
                            @if($errors->has('sib_job'))
                                <span class="help-block">
                                <strong>{!! $errors->first('sib_job') !!}</strong>
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
                            <button type="button" id="sibling_btn_add" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="sibling_btn_remove" class="btn btn-block btn-default waves-effect">
                                <i class="fa fa-minus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="sibling_form">
            <div id="sibling_form_add">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('sib_full_name') ? ' has-error' : '' !!}">
                        <label for="sib_full_name" class="control-label"><strong>គោត្តនាម-នាម:</strong></label>
                        {{--{!! Form::text('sib_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                        {{--{!! Form::text('sib_full_name[]', (isset($employer->siblings->sib_full_name)? $employer->siblings->sib_full_name : null), array('placeholder' => 'សូមបញ្ចូលគោត្តនៈនាមនិងនាម','class' => 'form-control')) !!}--}}
                        <input type="text" name="sib_full_name[]" class="form-control" value="{!! isset($sibling->sib_full_name) ? $sibling->sib_full_name : old('sib_full_name[]') !!}">
                        @if($errors->has('sib_full_name'))
                            <span class="help-block">
                                <strong>{!! $errors->first('sib_full_name') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="form-group{!! $errors->has('sib_fn_en') ? ' has-error' : '' !!}">
                        <label for="sib_fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
                        {{--{!! Form::text('sib_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                        {{--{!! Form::text('sib_fn_en[]', (isset($employer->siblings->sib_fn_en)? $employer->siblings->sib_fn_en : null), array('placeholder' => 'សូមបញ្ចូលឈ្មោះឡាតាំង','class' => 'form-control')) !!}--}}
                        <input type="text" name="sib_fn_en[]" class="form-control" value="{!! isset($sibling->sib_fn_en) ? $sibling->sib_fn_en : old('sib_fn_en[]') !!}">
                        @if($errors->has('sib_fn_en'))
                            <span class="help-block">
                                <strong>{!! $errors->first('sib_fn_en') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="sib_gender" class="control-label col-md-12">ភេទ:</label>
                    <!-- {!! Form::select('sib_gender[]', (isset($employer->siblings->sib_gender) ? (isset($employer->siblings->sib_gender) ? $gender : null) : $gender), (isset($employer->siblings->sib_gender) ? $employer->siblings->sib_gender : null), array('placeholder' => '--សូមជ្រើសរើស--','class' => 'form-control')) !!} -->
                    {{--<input type="text" name="sib_gender[]" class="form-control">--}}
                    <input type="text" name="sib_gender[]" class="form-control" value="{!! isset($sibling->sib_gender) ? $sibling->sib_gender : old('sib_gender[]') !!}" placeholder="--សូមជ្រើសរើស--">
                    @if($errors->has('sib_gender'))
                        <span class="help-block">
                            <strong>{!! $errors->first('sib_gender') !!}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('sib_dob') ? ' has-error' : '' !!}">
                        <label for="sib_dob" class="control-label">
                            <strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
                        <div class="input-group">
                            {{--{!! Form::text('sib_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'sib_dob')) !!}--}}
                            {{--{!! Form::text('sib_dob[]', (isset($employer->siblings->sib_dob)? $employer->siblings->sib_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'sib_dob')) !!}--}}
                            <input type="text" name="sib_dob[]" class="form-control" value="{!! isset($sibling->sib_dob) ? $sibling->sib_dob : old('sib_dob[]') !!}" placeholder="yyyy-m-d">
                            <span class="input-group-addon bg-custom b-0 text-white">
                                <i class="icon-calender"></i></span>
                            @if($errors->has('sib_dob'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('sib_dob') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('sib_job') ? ' has-error' : '' !!}">
                        <label for="sib_job" class="control-label"><strong>មុខរបរ:</strong></label>
                        <input type="text" name="sib_job[]" class="form-control" value="{!! isset($sibling->sib_job) ? $sibling->sib_job : old('sib_job[]') !!}" placeholder="សូមបញ្ចូលមុខរបរបច្ចុប្បន្ន ជាមួយនិងស្ថាប័នឬអង្គភាព">
                        @if($errors->has('sib_job'))
                            <span class="help-block">
                                <strong>{!! $errors->first('sib_job') !!}</strong>
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
                        <button type="button" id="sibling_btn_add" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="sibling_btn_remove" class="btn btn-block btn-default waves-effect">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<hr>
