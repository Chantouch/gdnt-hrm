<div class="row">
    <div class="col-lg-12">
        <div class="panel-group" id="accordion-public">

            {{--1.Personal info--}}
            @include('admin.employers.personal_info')
            {{--1.Personal info--}}

            {{--2.Information status Public--}}
            @include('admin.employers.public_status.index')
            {{--2.Information status Public--}}

            {{--3.Job History (From New to Old)--}}
            @include('admin.employers.job_history.index')
            {{--3.Job History (From New to Old)--}}

            {{--4.Award / Punishment--}}
            @include('admin.employers.award_punishment.index')
            {{--4.Award / Punishment--}}

            {{--5.Education Level--}}
            @include('admin.employers.edu_level')
            {{--5.Education Level--}}

            {{--6.Language level status--}}
            @include('admin.employers.languages.index')
            {{--6.Language level status--}}

            {{--7.Family status--}}
            @include('admin.employers.family_status')
            {{--7.Family status--}}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary waves-effect">Submit</button>
            <a class="btn btn-primary waves-effect" href="{{ route('admin.managements.employers.index') }}"> Cancel</a>
        </div>
    </div>
</div>