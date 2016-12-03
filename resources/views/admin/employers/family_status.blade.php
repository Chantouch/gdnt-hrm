<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#family_status"
               class="collapsed" aria-expanded="false">
                7.Family Status
            </a>
        </h4>
    </div>
    <div id="family_status" class="panel-collapse collapse">
        <div class="col-md-12 m-l-15">
            <h4>A.Parents Info</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('whp_full_name') ? ' has-error' : '' !!}">
                    <label for="whp_full_name" class="control-label"><strong>Father Name:</strong></label>
                    {{--{!! Form::text('whp_full_name', null, array('placeholder' => 'Enter full name','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_full_name', (isset($employer->wifeHusbandParent->whp_full_name)? $employer->wifeHusbandParent->whp_full_name : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group{!! $errors->has('whp_fn_en') ? ' has-error' : '' !!}">
                    <label for="whp_fn_en" class="control-label"><strong>Latin:</strong></label>
                    {{--{!! Form::text('whp_fn_en', null, array('placeholder' => 'Enter latin name','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_fn_en', (isset($employer->wifeHusbandParent->whp_fn_en)? $employer->wifeHusbandParent->whp_fn_en : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('whp_status') ? ' has-error' : '' !!}">
                    <label for="whp_status" class="control-label"><strong>Status:</strong></label><br>
                    {!! Form::radio('whp_status', '1', null, ['class'=> 'radio-primary']) !!} Living
                    {!! Form::radio('whp_status', '0', null) !!} Dead
                    {{--{!! Form::radio('whp_status', (isset($employer->wifeHusbandParent->whp_status)  ? 'dead' : null), array('class' => 'form-control')) !!} Dead--}}
                    {{--{!! Form::radio('whp_status', (isset($employer->wifeHusbandParent->whp_status)  ? 'living' : null), array('class' => 'form-control')) !!} Living--}}
                    @if($errors->has('whp_status'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_status') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('whp_dob') ? ' has-error' : '' !!}">
                    <label for="whp_dob" class="control-label">
                        <strong>DOB:</strong></label>
                    {{--{!! Form::text('whp_dob', null, array('placeholder' => 'Enter date of birth','class' => 'form-control', 'id'=>'whp_dob')) !!}--}}
                    {!! Form::text('whp_dob', (isset($employer->wifeHusbandParent->whp_dob)? $employer->wifeHusbandParent->whp_dob : null), array('placeholder' => 'Enter full name','class' => 'form-control', 'id'=>'whp_dob')) !!}
                    @if($errors->has('whp_dob'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_dob') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('whp_nationality') ? ' has-error' : '' !!}">
                    <label for="whp_nationality" class="control-label">
                        <strong>Nationality:</strong></label>
                    {{--{!! Form::text('whp_nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_nationality', (isset($employer->wifeHusbandParent->whp_nationality)? $employer->wifeHusbandParent->whp_nationality : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_nationality'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_nationality') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('whp_ethnic') ? ' has-error' : '' !!}">
                    <label for="whp_ethnic" class="control-label"><strong>Ethnic:</strong></label>
                    {{--{!! Form::text('whp_ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_ethnic', (isset($employer->wifeHusbandParent->whp_ethnic)? $employer->wifeHusbandParent->whp_ethnic : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_ethnic'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_ethnic') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('whp_address') ? ' has-error' : '' !!}">
                    <label for="whp_address" class="control-label"><strong>Address:</strong></label>
                    {{--{!! Form::textarea('whp_address', null, array('placeholder' => 'Enter address','class' => 'form-control', 'rows'=>'4')) !!}--}}
                    {!! Form::textarea('whp_address', (isset($employer->wifeHusbandParent->whp_address)? $employer->wifeHusbandParent->whp_address : null), array('placeholder' => 'Enter full name','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('whp_address'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_address') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('whp_job') ? ' has-error' : '' !!}">
                    <label for="whp_job" class="control-label"><strong>Nationality:</strong></label>
                    {{--{!! Form::text('whp_job', null, array('placeholder' => 'Enter job','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_job', (isset($employer->wifeHusbandParent->whp_job)? $employer->wifeHusbandParent->whp_job : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_job'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_job') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('whp_department') ? ' has-error' : '' !!}">
                    <label for="whp_department" class="control-label"><strong>Department:</strong></label>
                    {{--{!! Form::text('whp_department', null, array('placeholder' => 'Enter department','class' => 'form-control')) !!}--}}
                    {!! Form::text('whp_department', (isset($employer->wifeHusbandParent->whp_department)? $employer->wifeHusbandParent->whp_department : null), array('placeholder' => 'Enter full name','class' => 'form-control')) !!}
                    @if($errors->has('whp_department'))
                        <span class="help-block">
                            <strong>{!! $errors->first('whp_department') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>