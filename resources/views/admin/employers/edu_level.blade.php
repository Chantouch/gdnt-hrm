<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#g-t-edu"
               aria-expanded="false" class="collapsed">
                ៥.កំរិតវប្បធម៏ទូទៅ ការបណ្តុះបណ្តាលវិជ្ជាជីវៈ និងការបណ្តុះបណ្តាលបន្ត
            </a>
        </h4>
    </div>
    <div id="g-t-edu" class="panel-collapse collapse">
        {{--A.General Education--}}
        <div class="col-md-12 m-l-15">
            <h4>ក.កម្រិតវប្បធម៏ទូទៅ</h4>
        </div>
        <div class="panel-body">
            {{--//Level Education--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('el_level_edu') ? ' has-error' : '' !!}">
                    <label for="el_level_edu" class="control-label">
                        <strong>កម្រិត:</strong></label>
                    {{--{!! Form::text('el_level_edu', null, array('placeholder' => 'Enter your level','class' => 'form-control')) !!}--}}
                    {!! Form::text('el_level_edu', (isset($employer->educationLevel->el_level_edu) ? $employer->educationLevel->el_level_edu : null), array('placeholder' => 'Enter education level','class' => 'form-control', 'id'=>'el_level_edu')) !!}
                    @if($errors->has('el_level_edu'))
                        <span class="help-block">
                            <strong>{!! $errors->first('el_level_edu') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//School--}}
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('el_school') ? ' has-error' : '' !!}">
                    <label for="el_school" class="control-label">
                        <strong>ឈ្មោះសាលា:</strong></label>
                    {{--{!! Form::text('el_school', null, array('placeholder' => 'Enter your school','class' => 'form-control')) !!}--}}
                    {!! Form::text('el_school', (isset($employer->educationLevel->el_school) ? $employer->educationLevel->el_school : null), array('placeholder' => 'Enter school name','class' => 'form-control', 'id'=>'el_school')) !!}
                    @if($errors->has('el_school'))
                        <span class="help-block">
                            <strong>{!! $errors->first('el_school') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Country--}}
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('el_country') ? ' has-error' : '' !!}">
                    <label for="el_country" class="control-label">
                        <strong>ប្រទេស:</strong></label>
                    {{--{!! Form::text('el_country', null, array('placeholder' => 'Enter your school','class' => 'form-control')) !!}--}}
                    {!! Form::text('el_country', (isset($employer->educationLevel->el_country) ? $employer->educationLevel->el_country : null), array('placeholder' => 'Enter country name','class' => 'form-control', 'id'=>'el_country')) !!}
                    @if($errors->has('el_country'))
                        <span class="help-block">
                            <strong>{!! $errors->first('el_country') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Degree--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('el_degree') ? ' has-error' : '' !!}">
                    <label for="el_degree" class="control-label"><strong>ថ្មាក់:</strong></label>
                    {{--{!! Form::text('el_degree', null, array('placeholder' => 'Enter your degree','class' => 'form-control')) !!}--}}
                    {!! Form::text('el_degree', (isset($employer->educationLevel->el_degree) ? $employer->educationLevel->el_degree : null), array('placeholder' => 'Enter degree level','class' => 'form-control', 'id'=>'el_degree')) !!}
                    @if($errors->has('el_degree'))
                        <span class="help-block">
                            <strong>{!! $errors->first('el_degree') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('el_start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label"><strong>ថ្ថៃចូល:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('el_start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control')) !!}--}}
                        {!! Form::text('el_start_date', (isset($employer->educationLevel->el_start_date) ? $employer->educationLevel->el_start_date : null), array('placeholder' => 'Enter start date','class' => 'form-control', 'id'=>'el_start_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('el_start_date'))
                            <span class="help-block">
                             <strong>{!! $errors->first('el_start_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            {{--//End date--}}
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('el_end_date') ? ' has-error' : '' !!}">
                    <label for="end_date" class="control-label"><strong>ថ្ងៃបញ្ចប់:</strong></label>
                    <div class="input-group">
                        {{--{!! Form::text('el_end_date', null, array('placeholder' => 'Select your end date','class' => 'form-control')) !!}--}}
                        {!! Form::text('el_end_date', (isset($employer->educationLevel->el_end_date) ? $employer->educationLevel->el_end_date : null), array('placeholder' => 'Enter end date','class' => 'form-control', 'id'=>'el_end_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        @if($errors->has('el_end_date'))
                            <span class="help-block">
                            <strong>{!! $errors->first('el_end_date') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{--B.Degree/Specialize--}}
        <div class="col-md-12 m-l-15">
            <h4>B.Degree/Specialize</h4>
        </div>
        <div class="panel-body">
            {{--//Start date--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('start_date') ? ' has-error' : '' !!}">
                    <label for="start_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {!! Form::text('start_date', null, array('placeholder' => 'Select your start date','class' => 'form-control')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
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
                    <label for="end_date" class="control-label"><strong>Start Date:</strong></label>
                    <div class="input-group">
                        {!! Form::text('end_date', null, array('placeholder' => 'Select your end date','class' => 'form-control')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
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
                        <strong>Ministry/Institute:</strong></label>
                    {!! Form::text('ministry_institute', null, array('placeholder' => 'Select ministry or institute','class' => 'form-control')) !!}
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
                    <label for="occupation" class="control-label"><strong>Position:</strong></label>
                    {!! Form::text('occupation', null, array('placeholder' => 'Enter your occupation','class' => 'form-control')) !!}
                    @if($errors->has('occupation'))
                        <span class="help-block">
                            <strong>{!! $errors->first('occupation') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--//Others--}}
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('others') ? ' has-error' : '' !!}">
                    <label for="occupation_id" class="control-label">
                        <strong>Skills/Professional:</strong></label>
                    {!! Form::text('others', null, array('placeholder' => 'Enter others','class' => 'form-control')) !!}
                    @if($errors->has('others'))
                        <span class="help-block">
                            <strong>{!! $errors->first('others') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>