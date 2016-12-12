<div class="row">
    <div class="col-lg-12">
        <div class="panel-group" id="accordion-public">

            {{--1.Personal info--}}
            @include('admin.employers.personal.index')
            {{--1.Personal info--}}

            {{--2.Information status Public--}}
            @include('admin.employers.public_status.index')
            {{--2.Information status Public--}}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary waves-effect">Submit</button>
            <a class="btn btn-primary waves-effect" href="{{ route('admin.managements.employers.index') }}"> Cancel</a>
        </div>
    </div>
</div>