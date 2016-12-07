<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#job-history"
               aria-expanded="false" class="collapsed">
                ៣.ប្រវត្តិការងារ (សូមបំពេញតាមលំដាប់ ពីថ្មីទៅចាស់)
            </a>
        </h4>
    </div>
    <div id="job-history" class="panel-collapse collapse">
        {{--A.Public job--}}
        <div class="col-md-12 m-l-15">
            <h4>ក.ក្នុងមុខងារសាធារណៈ</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('phj_start_date') ? ' has-error' : '' !!}">
                    <label for="phj_start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('phj_start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control')) !!}--}}
                        {!! Form::text('phj_start_date', (isset($employer->jobHistoryPrivatePublic->phj_start_date) ? $employer->jobHistoryPrivatePublic->phj_start_date : null), array('placeholder' => 'Select start date Date','class' => 'form-control', 'id'=>'phj_start_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
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
                    <label for="phj_end_date" class="control-label"><strong>ថ្ងៃឈប់:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('phj_end_date', null, array('placeholder' => 'Select your end date','class' => 'form-control')) !!}--}}
                        {!! Form::text('phj_end_date', (isset($employer->jobHistoryPrivatePublic->phj_end_date) ? $employer->jobHistoryPrivatePublic->phj_end_date : null), array('placeholder' => 'Select start end Date','class' => 'form-control', 'id'=>'phj_end_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
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
                        <strong>ក្រសួង-ស្ថាប័ន:</strong></label>
                    {{--{!! Form::text('phj_ministry_institute', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_ministry_institute', (isset($employer->jobHistoryPrivatePublic->phj_ministry_institute) ? $employer->jobHistoryPrivatePublic->phj_ministry_institute : null), array('placeholder' => 'Enter your ministry or institute','class' => 'form-control', 'id'=>'phj_ministry_institute')) !!}
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
                        <strong>អង្គភាព:</strong></label>
                    {{--{!! Form::text('phj_department', null, array('placeholder' => 'Select department','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_department', (isset($employer->jobHistoryPrivatePublic->phj_department) ? $employer->jobHistoryPrivatePublic->phj_department : null), array('placeholder' => 'Enter your department','class' => 'form-control', 'id'=>'phj_department')) !!}
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
                    <label for="phj_occupation" class="control-label"><strong>មុខតំណែង:</strong></label>
                    {{--{!! Form::text('phj_occupation', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_occupation', (isset($employer->jobHistoryPrivatePublic->phj_occupation) ? $employer->jobHistoryPrivatePublic->phj_occupation : null), array('placeholder' => 'Enter your position','class' => 'form-control', 'id'=>'phj_occupation')) !!}
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
                    {{--{!! Form::text('phj_others', null, array('placeholder' => 'Enter others','class' => 'form-control')) !!}--}}
                    {!! Form::text('phj_others', (isset($employer->jobHistoryPrivatePublic->phj_others) ? $employer->jobHistoryPrivatePublic->phj_others : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'phj_others')) !!}
                    @if($errors->has('phj_others'))
                        <span class="help-block">
                            <strong>{!! $errors->first('phj_others') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{--B.Private job--}}
        <div class="col-md-12 m-l-15">
            <h4>ខ.ក្នុងវិស័យ​​ឯកជន</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div id="hpj_form">
                @if(count($employer->historyPrivateJob) >= 1)
                    @foreach($employer->historyPrivateJob as $hpj)
                        <div id="hpj_add_form">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                                    <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                                    <div class="input-group">
                                        {{--{!! Form::text('hpj_start_date[]', null, array('placeholder' => 'Select your start date','class' => 'form-control hpj_date_picker')) !!}--}}
                                        {!! Form::text('hpj_start_date[]', (isset($hpj->hpj_start_date) ? $hpj->hpj_start_date : null), array('placeholder' => 'Select your start date','class' => 'form-control hpj_date_picker', 'id'=>'hpj_start_date')) !!}
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
                                    <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                                    <div class="input-group">
                                        {{--{!! Form::text('hpj_end_date[]', null, array('placeholder' => 'Select your end date','class' => 'form-control hpj_date_picker')) !!}--}}
                                        {!! Form::text('hpj_end_date[]', (isset($hpj->hpj_end_date) ? $hpj->hpj_end_date : null), array('placeholder' => 'Select your start date','class' => 'form-control hpj_date_picker', 'id'=>'hpj_end_date')) !!}
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
                                        <strong>គ្រឹះស្ថាន/អង្គភាព:</strong></label>
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
                                    <label for="occupation" class="control-label"><strong>តួនាទី:</strong></label>
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
                                        <strong>ជំនាញ/បច្ចេកទេស:</strong></label>
                                    {{--{!! Form::text('hpj_others[]', null, array('placeholder' => 'សូមបញ្ចូល ជំនាញ/បច្ចេកទេស','class' => 'form-control')) !!}--}}
                                    {!! Form::text('hpj_others[]', (isset($hpj->hpj_others) ? $hpj->hpj_others : null), array('placeholder' => 'Select your start date','class' => 'form-control', 'id'=>'hpj_others')) !!}
                                    @if($errors->has('others'))
                                        <span class="help-block">
                                    <strong>{!! $errors->first('others') !!}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div id="hpj_add_form">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                                <label for="start_date" class="control-label"><strong>ថ្ងៃចូល:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('hpj_start_date[]', null, array('placeholder' => 'Select your start date','class' => 'form-control hpj_date_picker', 'id' => 'hpj_start_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white"><i
                                                class="icon-calender"></i></span>
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
                                <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('hpj_end_date[]', null, array('placeholder' => 'Select your end date','class' => 'form-control hpj_date_picker', 'id' => 'hpj_end_date')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white"><i
                                                class="icon-calender"></i></span>
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
                                    <strong>គ្រឹះស្ថាន/អង្គភាព:</strong></label>
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
                                <label for="occupation" class="control-label"><strong>តួនាទី:</strong></label>
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
                                    <strong>ជំនាញ/បច្ចេកទេស:</strong></label>
                                {!! Form::text('hpj_others[]', null, array('placeholder' => 'សូមបញ្ចូល ជំនាញ/បច្ចេកទេស','class' => 'form-control')) !!}
                                @if($errors->has('others'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('others') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            {{--//Add more field--}}

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group">
                            <button type="button" id="hpj_btn_add" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> បន្ថែម
                            </button>
                        </div>
                    </div>
                    {{--//Remove last field--}}
                    <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group">
                            <button type="button" id="hpj_btn_remove" class="btn btn-block btn-default">
                                <i class="fa fa-plus-square"></i> ដកចេញ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>