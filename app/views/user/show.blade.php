@extends('layouts.default')
@section('content')
    @include('includes.alert')


<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">


                    {{ HTML::image(Auth::user()->userInfo->avatar_url, 'alt', array('class'=>"  img-responsive")) }}
                </div>


                <div class="profile-usertitle">

                    <div class="profile-usertitle-name">
                        <p><b> {{Auth::user()->userInfo->fullName}} </b></p>
                    </div>

                    <div class="profile-usertitle-job">
                     {{'Flat Name'}}    <h4> <b>{{Auth::user()->flats->name}}</b></h4>
                    </div>

                </div>




            <!--    <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>

-->


                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Profile </a>
                        </li>
                        <li>

                            <a href="{{route('user.edit')}}" target="">
                                <i class="glyphicon glyphicon-ok"></i>
                                Edit Profile </a>


                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-7">
            <div class="profile-content">
                <div>

                    <h4><b>Basic Information</b></h4>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>User Name:</strong> {{Auth::user()->user_name}}</span>
                        <span class="posted_in"> <strong>Email:</strong>  {{Auth::user()->email}}</span>
                        <span class="posted_in"> <strong>Gender:</strong> {{Auth::user()->userInfo->gender}}</span>
                        <span class="posted_in"><strong>Date of Birth:</strong> {{Auth::user()->userInfo->date_of_birth}}</span>
                    </div>

                    <h4><b>Personal Information</b></h4>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Father Name:</strong> {{Auth::user()->userInfo->father}}</span>
                        <span class="posted_in"> <strong>Mother Name:</strong> {{Auth::user()->userInfo->mother}}</span>
                        <span class="posted_in"> <strong>Father Contact:</strong> {{Auth::user()->userInfo->father_contact}}</span>
                        <span class="posted_in"> <strong>Father Occupation:</strong> {{Auth::user()->userInfo->father_occup}}</span>
                        <span class="posted_in"> <strong>Mother Contact:</strong> {{Auth::user()->userInfo->mother_contact}}</span>
                        <span class="posted_in"> <strong>Mother Occupation:</strong> {{Auth::user()->userInfo->mother_occup}}</span>

                    </div>

                    <h4><b>Contact Information</b></h4>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Phone Number:</strong> {{Auth::user()->userInfo->phone}}</span>
                        <span class="posted_in"> <strong>Facebook Account:</strong> {{Auth::user()->userInfo->fb_account}}</span>
                    </div>

                    <h4><b>Permanent Address</b></h4>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Division:</strong> {{Auth::user()->userInfo->division}}</span>
                        <span class="posted_in"> <strong>District:</strong> {{Auth::user()->userInfo->district}}</span>
                        <span class="posted_in"> <strong>Upazilla:</strong> {{Auth::user()->userInfo->sub_district}}</span>
                        <span class="posted_in"> <strong>Village:</strong> {{Auth::user()->userInfo->village}}</span>
                        <span class="posted_in"> <strong>House Address:</strong> {{Auth::user()->userInfo->house}}</span>
                        <span class="posted_in"> <strong>City Corporation:</strong> {{Auth::user()->userInfo->city_corpo}}</span>

                    </div>
                    <h4><b>Academic Information</b></h4>

                    <div class="product_meta">
                        <span class="posted_in"> <strong>Division:</strong> {{Auth::user()->userInfo->study_level}}</span>
                        <span class="posted_in"> <strong>District:</strong> {{Auth::user()->userInfo->reg}}</span>
                        <span class="posted_in"> <strong>Upazilla:</strong> {{Auth::user()->userInfo->institute}}</span>
                        <span class="posted_in"> <strong>Village:</strong> {{Auth::user()->userInfo->department}}</span>
                        <span class="posted_in"> <strong>House Address:</strong> {{Auth::user()->userInfo->session}}</span>
                        <span class="posted_in"> <strong>City Corporation:</strong> {{Auth::user()->userInfo->cgpa}}</span>

                    </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>


<style>


    body {
        background: #F1F3FA;
    }

    /* Profile container */
    .profile {
        margin: 20px 0;
    }

    /* Profile sidebar */
    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 460px;
    }
</style>

@stop
