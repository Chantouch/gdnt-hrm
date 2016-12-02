<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#lang_level"
               aria-expanded="false" class="collapsed">
                6.Language Level Status (Medium, More Medium, Good, Very Good)
            </a>
        </h4>
    </div>
    <div id="lang_level" class="panel-collapse collapse">
        {{--A.Language--}}
        <div class="panel-body">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('ll_lang_id') ? ' has-error' : '' !!}">
                    <label for="ll_lang_id" class="control-label">
                        <strong>Language:</strong></label>
                    {!! Form::select('ll_lang_id', (isset($employer->languageLevel->ll_lang_id) ? (isset($employer->languageLevel->ll_lang_id) ? $language : null) : $language), (isset($employer->languageLevel->ll_lang_id) ? $employer->languageLevel->ll_lang_id : null), array('placeholder' => '--Select your known language--','class' => 'form-control')) !!}
                    {{--{!! Form::text('ll_lang_id', (isset($employer->languageLevel->ll_lang_id) ? $employer->languageLevel->ll_lang_id : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'ll_lang_id')) !!}--}}
                    @if($errors->has('ll_lang_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ll_lang_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Read--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_read') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>Read:</strong></label>
                    {{--{!! Form::text('ll_read', (isset($employer->languageLevel->el_school) ? $employer->languageLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_read', (isset($employer->languageLevel->ll_read) ? (isset($employer->languageLevel->ll_read) ? $can_level : null) : $can_level), (isset($employer->languageLevel->ll_read) ? $employer->languageLevel->ll_read : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_read'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ll_read') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Write--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_write') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>Write:</strong></label>
                    {{--{!! Form::text('ll_write', (isset($employer->languageLevel->el_school) ? $employer->languageLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_write', (isset($employer->languageLevel->ll_write) ? (isset($employer->languageLevel->ll_write) ? $can_level : null) : $can_level), (isset($employer->languageLevel->ll_write) ? $employer->languageLevel->ll_write : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_write'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ll_write') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Listen--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_listen') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>Listen:</strong></label>
                    {{--{!! Form::text('ll_listen', (isset($employer->languageLevel->el_school) ? $employer->languageLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_listen', (isset($employer->languageLevel->ll_listen) ? (isset($employer->languageLevel->ll_listen) ? $can_level : null) : $can_level), (isset($employer->languageLevel->ll_listen) ? $employer->languageLevel->ll_listen : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_listen'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ll_listen') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Speak--}}
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ll_speak') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>Speak:</strong></label>
                    {{--{!! Form::text('ll_speak', (isset($employer->languageLevel->el_school) ? $employer->languageLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                    {!! Form::select('ll_speak', (isset($employer->languageLevel->ll_speak) ? (isset($employer->languageLevel->ll_speak) ? $can_level : null) : $can_level), (isset($employer->languageLevel->ll_speak) ? $employer->languageLevel->ll_speak : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                    @if($errors->has('ll_speak'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ll_speak') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>