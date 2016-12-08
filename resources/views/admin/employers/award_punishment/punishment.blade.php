{{--B.Punishment--}}
<div class="col-md-12 m-l-15">
    <h4>ខ.ទណ្ឌកម្មវិន័យ</h4>
</div>
<div class="panel-body">
    {{--//Doc number--}}
    <div id="punishment_form">
        @if(isset($employer))
            @if(count($employer->punishments) >= 1)
                @foreach($employer->punishments as $punishment)
                    <div id="punishment_form_add">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                                <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                                {!! Form::text('pun_doc_number[]', (isset($punishment->pun_doc_number) ? $punishment->pun_doc_number : null), array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}
                                @if($errors->has('doc_number'))
                                    <span class="help-block">
                                    <strong>{!! $errors->first('doc_number') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        {{--//Published_date--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                                <label for="published_date" class="control-label"><strong>កាលបរិច្ឆេទ:</strong></label>
                                <div class="input-group">
                                    {!! Form::text('pun_published_date[]', (isset($punishment->pun_published_date) ? $punishment->pun_published_date : null), array('placeholder' => 'Select your published date','class' => 'form-control pun_date_picker')) !!}
                                    <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                                    @if($errors->has('published_date'))
                                        <span class="help-block">
                                <strong>{!! $errors->first('published_date') !!}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{--//Department--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                                <label for="department" class="control-label">
                                    <strong>ស្ថាប័ន/អង្គភាព (ស្នើសុំ):</strong></label>
                                {!! Form::text('pun_department[]', (isset($punishment->pun_department) ? $punishment->pun_department : null), array('placeholder' => 'Enter department','class' => 'form-control')) !!}
                                @if($errors->has('department'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        {{--//Type--}}
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                                <label for="punish_type" class="control-label">
                                    <strong>ប្រភេទ:</strong></label>
                                {!! Form::text('pun_punish_type[]', (isset($punishment->pun_punish_type) ? $punishment->pun_punish_type : null), array('placeholder' => 'Select your punish_type','class' => 'form-control')) !!}
                                @if($errors->has('punish_type'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('punish_type') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        {{--//Description--}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group{!! $errors->has('description') ? ' has-error' : '' !!}">
                                <label for="description" class="control-label"><strong>ខ្លឹមសារ:</strong></label>
                                {!! Form::textarea('pun_description[]', (isset($punishment->pun_description) ? $punishment->pun_description : null), array('placeholder' => 'Enter your description','class' => 'form-control', 'rows'=> '4')) !!}
                                @if($errors->has('description'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @else
            <div id="punishment_form_add">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                        <label for="doc_number" class="control-label"><strong>លេខឯកសារ:</strong></label>
                        {!! Form::text('pun_doc_number[]', (isset($punishment->pun_doc_number) ? $punishment->pun_doc_number : null), array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}
                        @if($errors->has('doc_number'))
                            <span class="help-block">
                                    <strong>{!! $errors->first('doc_number') !!}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                {{--//Published date--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                        <label for="published_date" class="control-label"><strong>កាលបរិច្ឆេទ:</strong></label>
                        <div class="input-group">
                            {!! Form::text('pun_published_date[]', (isset($punishment->pun_published_date) ? $punishment->pun_published_date : null), array('placeholder' => 'Select your published date','class' => 'form-control pun_date_picker')) !!}
                            <span class="input-group-addon bg-custom b-0 text-white">
                                    <i class="icon-calender"></i></span>
                            @if($errors->has('published_date'))
                                <span class="help-block">
                                <strong>{!! $errors->first('published_date') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                {{--//Department--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                        <label for="department" class="control-label">
                            <strong>ស្ថាប័ន/អង្គភាព (ស្នើសុំ):</strong></label>
                        {!! Form::text('pun_department[]', (isset($punishment->pun_department) ? $punishment->pun_department : null), array('placeholder' => 'Enter department','class' => 'form-control')) !!}
                        @if($errors->has('department'))
                            <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{--//Type--}}
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                        <label for="punish_type" class="control-label">
                            <strong>ប្រភេទ:</strong></label>
                        {!! Form::text('pun_punish_type[]', (isset($punishment->pun_punish_type) ? $punishment->pun_punish_type : null), array('placeholder' => 'Select your punish_type','class' => 'form-control')) !!}
                        @if($errors->has('punish_type'))
                            <span class="help-block">
                            <strong>{!! $errors->first('punish_type') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{--//Description--}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group{!! $errors->has('description') ? ' has-error' : '' !!}">
                        <label for="description" class="control-label"><strong>ខ្លឹមសារ:</strong></label>
                        {!! Form::textarea('pun_description[]', (isset($punishment->pun_description) ? $punishment->pun_description : null), array('placeholder' => 'Enter your description','class' => 'form-control', 'rows'=> '4')) !!}
                        @if($errors->has('description'))
                            <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                        @endif
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
                    <button type="button" id="pun_btn_add" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> បន្ថែម
                    </button>
                </div>
            </div>
            {{--//Remove last field--}}
            <div class="col-xs-12 col-sm-2 col-md-2"
                 id="no_salary_div_remove">
                <div class="form-group">
                    <button type="button" id="pun_btn_remove" class="btn btn-block btn-default">
                        <i class="fa fa-plus-square"></i> ដកចេញ
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
