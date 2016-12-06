<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="collapsed">
                ក.ព័ត៏មានផ្ទាល់ខ្លួន
            </a>
        </h4>
    </div>
    <div id="personal-info" class="panel-collapse collapse" style="display: block;">
        <div class="panel-body">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('emp_id') ? ' has-error' : '' !!}">
                    <label for="emp_id" class="control-label"><strong>អត្តសញ្ណាណមន្ត្រីរាជការ:</strong></label>
                    {!! Form::text('emp_id', null, array('placeholder' => 'ID Card Staff','class' => 'form-control')) !!}
                    @if($errors->has('emp_id'))
                        <span class="help-block">
                            <strong>{!! $errors->first('emp_id') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('id_notice_emp') ? ' has-error' : '' !!}">
                    <label for="id_notice_emp" class="control-label">
                        <strong>លេខបណ្ឌសម្គាល់មន្ត្រីកសហរ:</strong></label>
                    {!! Form::text('id_notice_emp', null, array('placeholder' => 'ID Notice Employer','class' => 'form-control')) !!}
                    @if($errors->has('id_notice_emp'))
                        <span class="help-block">
                            <strong>{!! $errors->first('id_notice_emp') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('department_code') ? ' has-error' : '' !!}">
                    <label for="department_code" class="control-label">
                        <strong>លេខកូដអង្គភាព:</strong></label>
                    {!! Form::text('department_code', null, array('placeholder' => 'Department code','class' => 'form-control')) !!}
                    @if($errors->has('department_code'))
                        <span class="help-block">
                            <strong>{!! $errors->first('department_code') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('full_name') ? ' has-error' : '' !!}">
                    <label for="full_name" class="control-label"><strong>គោត្តនាម-នាម:</strong></label>
                    {!! Form::text('full_name', null, array('placeholder' => 'Full Name','class' => 'form-control')) !!}
                    @if($errors->has('full_name'))
                        <span class="help-block">
                            <strong>{!! $errors->first('full_name') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('fn_en') ? ' has-error' : '' !!}">
                    <label for="fn_en" class="control-label"><strong>ជាអក្សរឡាតាំង:</strong></label>
                    {!! Form::text('fn_en', null, array('placeholder' => 'Full name latin','class' => 'form-control')) !!}
                    @if($errors->has('fn_en'))
                        <span class="help-block">
                            <strong>{!! $errors->first('fn_en') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2{!! $errors->has('gender') ? ' has-error' : '' !!}">
                <label for="subsidy" class="control-label col-md-12">ភេទ:</label>
                <div class="col-md-12">
                    <div class="radio radio-info radio-inline">
                        {!! Form::radio('gender', 'f', null, ['class'=> 'radio-primary']) !!}
                        <label for="Female"> ស្រី </label>
                    </div>
                    <div class="radio radio-inline">
                        {!! Form::radio('gender', 'm', null) !!}
                        <label for="Male"> ប្រុស </label>
                    </div>
                    @if($errors->has('gender'))
                        <span class="help-block">
                            <strong>{!! $errors->first('gender') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group{!! $errors->has('dob') ? ' has-error' : '' !!}">
                    <label for="dob" class="control-label"><strong>ថ្ងៃខែឆ្នាំកំណើត:</strong></label>
                    <div class="input-group">
                        {!! Form::text('dob', null, array('placeholder' => 'Enter Date of birth','class' => 'form-control', 'id'=>'dob')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i
                                    class="icon-calender"></i></span>
                        @if($errors->has('dob'))
                            <span class="help-block">
                                <strong>{!! $errors->first('dob') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('marital_status') ? ' has-error' : '' !!}">
                    <label for="marital_status" class="control-label">
                        <strong>ស្ងានភាពគ្រួសារ:</strong></label>
                    {!! Form::select('marital_status', $marital_status, null, array('placeholder' => '--ជ្រើសរើស--','class' => 'form-control')) !!}
                    @if($errors->has('marital_status'))
                        <span class="help-block">
                            <strong>{!! $errors->first('marital_status') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('nationality') ? ' has-error' : '' !!}">
                    <label for="nationality" class="control-label"><strong>សញ្ជាតិ:</strong></label>
                    {!! Form::text('nationality', null, array('placeholder' => 'Enter nationality','class' => 'form-control')) !!}
                    @if($errors->has('nationality'))
                        <span class="help-block">
                            <strong>{!! $errors->first('nationality') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group{!! $errors->has('ethnic') ? ' has-error' : '' !!}">
                    <label for="ethnic" class="control-label"><strong>ជនជាតិ:</strong></label>
                    {!! Form::text('ethnic', null, array('placeholder' => 'Enter ethnic','class' => 'form-control')) !!}
                    @if($errors->has('ethnic'))
                        <span class="help-block">
                            <strong>{!! $errors->first('ethnic') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('place_of_birth') ? ' has-error' : '' !!}">
                    <label for="place_of_birth" class="control-label">
                        <strong>ទីកន្លែងកំណើត:</strong></label>
                    {!! Form::textarea('place_of_birth', null, array('placeholder' => 'Enter place of birth','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('place_of_birth'))
                        <span class="help-block">
                            <strong>{!! $errors->first('place_of_birth') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{!! $errors->has('current_address') ? ' has-error' : '' !!}">
                    <label for="current_address" class="control-label">
                        <strong>អាសយដ្ឋានបច្បបន្ន:</strong></label>
                    {!! Form::textarea('current_address', null, array('placeholder' => 'Enter current address','class' => 'form-control', 'rows'=>'3')) !!}
                    @if($errors->has('current_address'))
                        <span class="help-block">
                            <strong>{!! $errors->first('current_address') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('email') ? ' has-error' : '' !!}">
                    <label for="email" class="control-label"><strong>អ៊ីមែល:</strong></label>
                    {!! Form::text('email', null, array('placeholder' => 'Enter email','class' => 'form-control')) !!}
                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{!! $errors->first('email') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('hand_phone') ? ' has-error' : '' !!}">
                    <label for="hand_phone" class="control-label"><strong>លេខទូរសព្ទដៃ:</strong></label>
                    {!! Form::text('hand_phone', null, array('placeholder' => 'Enter  hand phone','class' => 'form-control')) !!}
                    @if($errors->has('hand_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('hand_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('work_phone') ? ' has-error' : '' !!}">
                    <label for="work_phone" class="control-label"><strong>លេខទូរសព្ទធ្វើការ:</strong></label>
                    {!! Form::text('work_phone', null, array('placeholder' => 'Enter work phone','class' => 'form-control')) !!}
                    @if($errors->has('work_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('work_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group{!! $errors->has('home_phone') ? ' has-error' : '' !!}">
                    <label for="home_phone" class="control-label"><strong>លេខទូរសព្ទផ្ទះ:</strong></label>
                    {!! Form::text('home_phone', null, array('placeholder' => 'Enter home phone','class' => 'form-control')) !!}
                    @if($errors->has('home_phone'))
                        <span class="help-block">
                            <strong>{!! $errors->first('home_phone') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('id_card') ? ' has-error' : '' !!}">
                    <label for="id_card" class="control-label"><strong>អត្តសញ្ញាណប័ណ្ឌ:</strong></label>
                    {!! Form::text('id_card', null, array('placeholder' => 'Enter id card','class' => 'form-control')) !!}
                    @if($errors->has('id_card'))
                        <span class="help-block">
                            <strong>{!! $errors->first('id_card') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('id_card_expired') ? ' has-error' : '' !!}">
                    <label for="id_card_expired" class="control-label">
                        <strong>កាលបរិច្ឆេទផុតកំណត់:</strong></label>
                    <div class="input-group">
                        {!! Form::text('id_card_expired', null, array('placeholder' => 'Enter id card expired','class' => 'form-control', 'id'=> 'id_card_expired')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i
                                    class="icon-calender"></i></span>
                        @if($errors->has('id_card_expired'))
                            <span class="help-block">
                                <strong>{!! $errors->first('id_card_expired') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('passport') ? ' has-error' : '' !!}">
                    <label for="passport" class="control-label"><strong>លិខិតឆ្លងដែន:</strong></label>
                    {!! Form::text('passport', null, array('placeholder' => 'Enter passport','class' => 'form-control')) !!}
                    @if($errors->has('passport'))
                        <span class="help-block">
                            <strong>{!! $errors->first('passport') !!}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group{!! $errors->has('passport_expired_date') ? ' has-error' : '' !!}">
                    <label for="passport_expired_date" class="control-label"><strong>កាលបរិច្ឆេទផុតកំណត់:</strong></label>
                    <div class="input-group">
                        {!! Form::text('passport_expired_date', null, array('placeholder' => 'Enter passport expired date','class' => 'form-control', 'id'=>'passport_expired_date')) !!}
                        <span class="input-group-addon bg-custom b-0 text-white"><i
                                    class="icon-calender"></i></span>
                        @if($errors->has('passport_expired_date'))
                            <span class="help-block">
                                <strong>{!! $errors->first('passport_expired_date') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>