@extends('layouts.gdnt')
@section('title', "$employer->full_name")

@section('specific_css')
    <style>
        .show-user {
            display: none;
            visibility: hidden;
        }
    </style>
@stop

@section('full_content')
    <div class="wraper container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-picture text-center">
                    <div class="bg-picture-overlay"></div>
                    <div class="profile-info-name">
                        <img src="{!! asset('assets/images/users/avatar-1.jpg') !!}"
                             class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                        <h4 class="m-b-5">
                            <b>
                                @if($employer->full_name == '' || $employer->full_name == null)
                                    {!! $employer->name !!}
                                @else
                                    {!! $employer->full_name !!}
                                @endif
                            </b>
                        </h4>
                        <p class="text-muted"><i class="fa fa-map-marker"></i> Phnom Penh, Cambodia</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">

                <div class="card-box m-t-20">
                    <h4 class="m-t-0 header-title"><b>Personal Information</b></h4>
                    <div class="p-20">
                        <div class="about-info-p">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">{!! $employer->name !!}</p>
                        </div>
                        <div class="about-info-p">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted">(+855) 70 375 783</p>
                        </div>
                        <div class="about-info-p">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">{!! $employer->email !!}</p>
                        </div>
                        <div class="about-info-p m-b-0">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">Phnom Penh</p>
                        </div>
                    </div>
                </div>

                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Biography</b></h4>

                    <div class="p-20">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                        </p>

                        <p>
                            <strong>
                                But also the leap into electronic typesetting, remaining essentially
                                unchanged.
                            </strong>
                        </p>

                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <!-- Personal-Information -->

                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Skills</b></h4>

                    <div class="p-20">
                        <div class="m-b-15">
                            <h5>Angular Js <span class="pull-right">60%</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary wow animated progress-animated"
                                     role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="m-b-15">
                            <h5>Javascript <span class="pull-right">90%</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-pink wow animated progress-animated"
                                     role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 90%;">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="m-b-15">
                            <h5>Wordpress <span class="pull-right">80%</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-purple wow animated progress-animated"
                                     role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="m-b-0">
                            <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info wow animated progress-animated"
                                     role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div>

            <div class="col-md-8">
                <div class="card-box m-t-20">
                    <h4 class="m-t-0 header-title"><b>Activity</b></h4>
                    <div class="p-20">
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">5 minutes ago</div>
                                    <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo
                                        <strong>"DSC000586.jpg"</strong></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">30 minutes ago</div>
                                    <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet
                                            tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">59 minutes ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#"
                                                                                                         class="text-success">John
                                            Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet
                                            tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">5 minutes ago</div>
                                    <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">30 minutes ago</div>
                                    <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet
                                            tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted">59 minutes ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#"
                                                                                                         class="text-success">John
                                            Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet
                                            tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title"><b>My Office</b></h4>

                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491.6935755640356!2d104.9239360624847!3d11.574130463049336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21586236e0659238!2sGeneral+Department+of+National+Treasury!5e0!3m2!1sen!2skh!4v1480556871678"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <br/>
                    <div class="gmap-info">
                        <h4><b><a href="#" class="text-dark">GDNT - General Department of National Treasury</a></b></h4>
                        <p>អាគារលេខ១៩ សង្កាត់វត្តភ្នំ, </p>
                        <p>រុក្ខវិថីព្រះមហាក្សត្រីយានីកុសមៈ(ផ្លូវលេខ១០៦) , </p>
                        <p>ខណ្ឌដូនពេញ, រាជធានីភ្នំពេញ 12200,</p>
                        <p>ព្រះរាជាណាចក្រកម្ពុជា</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div> <!-- container -->

@stop


@section('specific_js')

@stop

@section('specific_script')
    <script>

    </script>
@stop