<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#ward-punishment"
               class="collapsed" aria-expanded="false">
                4.Award / Punishment
            </a>
        </h4>
    </div>
    <div id="ward-punishment" class="panel-collapse collapse">
        {{--A.Award--}}
        <div class="col-md-12 m-l-15">
            <h4>A.Award</h4>
        </div>
        <div class="panel-body">
            {{--//Doc number--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('ap_doc_number') ? ' has-error' : '' !!}">
                    <label for="ap_doc_number" class="control-label"><strong>Doc number:</strong></label>
                    {{--{!! Form::text('ap_doc_number', null, array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}--}}
                    {!! Form::text('ap_doc_number', (isset($employer->awardPunishment->ap_doc_number) ? $employer->awardPunishment->ap_doc_number : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'ap_doc_number')) !!}
                    @if($errors->has('ap_doc_number'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ap_doc_number') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//published_date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('ap_published_date') ? ' has-error' : '' !!}">
                    <label for="ap_published_date" class="control-label"><strong>Published
                            date:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('ap_published_date', null, array('placeholder' => 'Select your published date','class' => 'form-control')) !!}--}}
                        {!! Form::text('ap_published_date', (isset($employer->awardPunishment->ap_published_date) ? $employer->awardPunishment->ap_published_date : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'ap_published_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('ap_published_date'))
                            <span class="help-block">
                                <strong>{!! $errors->first('ap_published_date') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//department--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('ap_department') ? ' has-error' : '' !!}">
                    <label for="ap_department" class="control-label">
                        <strong>Department:</strong></label>
                    {{--{!! Form::text('ap_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('ap_department', (isset($employer->awardPunishment->ap_department) ? $employer->awardPunishment->ap_department : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'ap_department')) !!}
                    @if($errors->has('ap_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ap_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//type--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('ap_type') ? ' has-error' : '' !!}">
                    <label for="ap_type" class="control-label">
                        <strong>Type:</strong></label>
                    {{--{!! Form::text('ap_type', null, array('placeholder' => 'Select your type','class' => 'form-control')) !!}--}}
                    {{--{!! Form::text('ap_type', (isset($employer->awardPunishment->ap_type) ? $employer->awardPunishment->ap_type : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'ap_type')) !!}--}}
                    {!! Form::select('ap_type', (isset($employer->awardPunishment->ap_type) ? (isset($employer->awardPunishment->ap_type) ? $types : null) : $types), (isset($employer->awardPunishment->ap_type) ? $employer->awardPunishment->ap_type : null), array('placeholder' => 'Select Type','class' => 'form-control')) !!}
                    @if($errors->has('ap_type'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ap_type') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Description--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('ap_description') ? ' has-error' : '' !!}">
                    <label for="ap_description" class="control-label"><strong>Description:</strong></label>
                    {{--{!! Form::text('ap_description', null, array('placeholder' => 'Enter your description','class' => 'form-control')) !!}--}}
                    {!! Form::textarea('ap_description', (isset($employer->awardPunishment->ap_description) ? $employer->awardPunishment->ap_description : null), array('placeholder' => 'Enter others','class' => 'form-control', 'id'=>'ap_description', 'rows'=>'3')) !!}
                    @if($errors->has('ap_description'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ap_description') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        {{--B.Punishment--}}
        <div class="col-md-12 m-l-15">
            <h4>B.Punishment</h4>
        </div>
        <div class="panel-body">
            {{--//Doc number--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('doc_number') ? ' has-error' : '' !!}">
                    <label for="doc_number" class="control-label"><strong>Doc number:</strong></label>
                    {!! Form::text('doc_number', null, array('placeholder' => 'Enter your doc number','class' => 'form-control')) !!}
                    @if($errors->has('doc_number'))
                        <span class="help-block">
                            <strong>{!! $errors->first('doc_number') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//published_date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('published_date') ? ' has-error' : '' !!}">
                    <label for="published_date" class="control-label"><strong>Published
                            date:</strong></label>
                    <div class="input-group">
                        {!! Form::text('published_date', null, array('placeholder' => 'Select your published date','class' => 'form-control')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('published_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('published_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//department--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('department') ? ' has-error' : '' !!}">
                    <label for="department" class="control-label">
                        <strong>Department:</strong></label>
                    {!! Form::text('department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}
                    @if($errors->has('department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//type--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('punish_type') ? ' has-error' : '' !!}">
                    <label for="punish_type" class="control-label">
                        <strong>Punish type:</strong></label>
                    {!! Form::text('punish_type', null, array('placeholder' => 'Select your punish_type','class' => 'form-control')) !!}
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
                    <label for="description" class="control-label"><strong>Description:</strong></label>
                    {!! Form::textarea('description', null, array('placeholder' => 'Enter your description','class' => 'form-control', 'rows'=> '4')) !!}
                    @if($errors->has('description'))
                        <span class="help-block">
                            <strong>{!! $errors->first('description') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>