<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#lang_level"
               aria-expanded="false" class="collapsed">
                6.Language Level Status (Medium, More Medium, Good, Very Good)
            </a>
        </h4>
    </div>
    <div id="lang_level" class="panel-collapse collapse in">
        {{--A.Language--}}

        @if(isset($employer))
            @foreach($languages as $lang)
                <div class="panel-body" id="add_language">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group{!! $errors->has('ll_lang_id') ? ' has-error' : '' !!}">
                            <label for="ll_lang_id" class="control-label">
                                <strong>Language:</strong></label>
                            {!! Form::select('ll_lang_id_'.App\Models\LanguageLevel::clean($lang->ll_lang_id), (isset($lang->ll_lang_id) ? (isset($lang->ll_lang_id) ? $language : null) : $language), (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => '--Select your known language--','class' => 'form-control')) !!}
                            {{--{!! Form::text('ll_lang_id', (isset($lang->ll_lang_id) ? $lang->ll_lang_id : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'ll_lang_id')) !!}--}}
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
                            {{--{!! Form::text('ll_read', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_read_'.App\Models\LanguageLevel::clean($lang->ll_read), (isset($lang->ll_read) ? (isset($lang->ll_read) ? $can_level : null) : $can_level), (isset($lang->ll_read) ? $lang->ll_read : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
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
                            {{--{!! Form::text('ll_write', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_write_'.App\Models\LanguageLevel::clean($lang->ll_write), (isset($lang->ll_write) ? (isset($lang->ll_write) ? $can_level : null) : $can_level), (isset($lang->ll_write) ? $lang->ll_write : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
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
                            {{--{!! Form::text('ll_listen', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_listen_'.App\Models\LanguageLevel::clean($lang->ll_listen), (isset($lang->ll_listen) ? (isset($lang->ll_listen) ? $can_level : null) : $can_level), (isset($lang->ll_listen) ? $lang->ll_listen : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
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
                            {{--{!! Form::text('ll_speak', (isset($lang->el_school) ? $lang->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}--}}
                            {!! Form::select('ll_speak_'.App\Models\LanguageLevel::clean($lang->ll_speak), (isset($lang->ll_speak) ? (isset($lang->ll_speak) ? $can_level : null) : $can_level), (isset($lang->ll_speak) ? $lang->ll_speak : null), array('placeholder' => '--Select your ability--','class' => 'form-control')) !!}
                            @if($errors->has('ll_speak'))
                                <span class="help-block">
                            <strong>{!! $errors->first('ll_speak') !!}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" name="langIds[]" value="{{$lang->id}}">
                </div>
            @endforeach
        @endif

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="form-group">
                    <button id="add" class="btn btn-sm" type="button"><i class="fa fa-plus"></i> Add New
                    </button>
                    <button id="minus" class="btn btn-sm" type="button"><i class="fa fa-minus"></i> Remove
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>