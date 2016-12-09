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
                            {!! Form::text('child_full_name[]', (isset($child->child_full_name)? $child->child_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
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
                            {!! Form::text('child_fn_en[]', (isset($child->child_fn_en)? $child->child_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                            @if($errors->has('child_fn_en'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('child_fn_en') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                        {!! Form::select('child_gender[]', (isset($child->child_gender) ? (isset($child->child_gender) ? $gender : null) : $gender), (isset($child->child_gender) ? $child->child_gender : null), array('placeholder' => 'Select gender','class' => 'form-control')) !!}
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
                                {!! Form::text('child_dob[]', (isset($child->child_dob)? $child->child_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'child_dob')) !!}
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
                            {!! Form::text('child_job[]', (isset($child->child_job)? $child->child_job : null), array('placeholder' => 'Enter your current job including department','class' => 'form-control')) !!}
                            @if($errors->has('child_job'))
                                <span class="help-block">
                                        <strong>{!! $errors->first('child_job') !!}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                        {!! Form::select('child_subsidy[]', (isset($child->child_subsidy) ? (isset($child->child_subsidy) ? $subsidy : null) : $subsidy), (isset($child->child_subsidy) ? $child->child_subsidy : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
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
                            {!! Form::text('child_full_name[]', (isset($employer->children->child_full_name)? $employer->children->child_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
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
                            {!! Form::text('child_fn_en[]', (isset($employer->children->child_fn_en)? $employer->children->child_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                            @if($errors->has('child_fn_en'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_fn_en') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                        {!! Form::select('child_gender[]', (isset($employer->children->child_gender) ? (isset($employer->children->child_gender) ? $gender : null) : $gender), (isset($employer->children->child_gender) ? $employer->children->child_gender : null), array('placeholder' => 'Select gender','class' => 'form-control')) !!}
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
                                {!! Form::text('child_dob[]', (isset($employer->children->child_dob)? $employer->children->child_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'child_dob')) !!}
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
                            {!! Form::text('child_job[]', (isset($employer->children->child_job)? $employer->children->child_job : null), array('placeholder' => 'Enter your current job including department','class' => 'form-control')) !!}
                            @if($errors->has('child_job'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('child_job') !!}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                        {!! Form::select('child_subsidy[]', (isset($employer->children->child_subsidy) ? (isset($employer->children->child_subsidy) ? $subsidy : null) : $subsidy), (isset($employer->children->child_subsidy) ? $employer->children->child_subsidy : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
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
                            <button type="button" id="child_btn_add" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2"
                         id="no_salary_div_remove">
                        <div class="form-group">
                            <button type="button" id="child_btn_remove" class="btn btn-block btn-default">
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
                        {!! Form::text('child_full_name[]', (isset($employer->children->child_full_name)? $employer->children->child_full_name : null), array('placeholder' => 'Enter your full name','class' => 'form-control')) !!}
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
                        {!! Form::text('child_fn_en[]', (isset($employer->children->child_fn_en)? $employer->children->child_fn_en : null), array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}
                        @if($errors->has('child_fn_en'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_fn_en') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="child_gender" class="control-label col-md-12">ភេទ:</label>
                    {!! Form::select('child_gender[]', (isset($employer->children->child_gender) ? (isset($employer->children->child_gender) ? $gender : null) : $gender), (isset($employer->children->child_gender) ? $employer->children->child_gender : null), array('placeholder' => 'Select gender','class' => 'form-control')) !!}
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
                            {!! Form::text('child_dob[]', (isset($employer->children->child_dob)? $employer->children->child_dob : null), array('placeholder' => 'yyyy-m-d','class' => 'form-control date_picker', 'id'=>'child_dob')) !!}
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
                        {!! Form::text('child_job[]', (isset($employer->children->child_job)? $employer->children->child_job : null), array('placeholder' => 'Enter your current job including department','class' => 'form-control')) !!}
                        @if($errors->has('child_job'))
                            <span class="help-block">
                                <strong>{!! $errors->first('child_job') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="subsidy" class="control-label col-md-12">ប្រាក់ឧបត្ថម្ភ:</label>
                    {!! Form::select('child_subsidy[]', (isset($employer->children->child_subsidy) ? (isset($employer->children->child_subsidy) ? $subsidy : null) : $subsidy), (isset($employer->children->child_subsidy) ? $employer->children->child_subsidy : null), array('placeholder' => 'Select status','class' => 'form-control')) !!}
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
                        <button type="button" id="child_btn_add" class="btn btn-block btn-default">
                            <i class="fa fa-plus-square"></i> បន្ថែម
                        </button>
                    </div>
                </div>
                {{--//Remove last field--}}
                <div class="col-xs-12 col-sm-2 col-md-2"
                     id="no_salary_div_remove">
                    <div class="form-group">
                        <button type="button" id="child_btn_remove" class="btn btn-block btn-default">
                            <i class="fa fa-minus-square"></i> ដកចេញ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>