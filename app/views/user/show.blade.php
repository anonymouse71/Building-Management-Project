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

                    @if(Auth::user()->flat_id != 0 && Auth::user()->role_id != 2)
                    <div class="profile-usertitle-job">
                     {{'Flat Name'}}    <h4> <b>{{Auth::user()->flats->name}}</b></h4> {{'(General Member)'}}
                    </div>
                    @elseif(Auth::user()->role_id == 2)
                        <div class="profile-usertitle-job">
                            {{'Flat Name'}}    <h4> <b>{{Auth::user()->flats->name}}</b></h4> {{'(ADMIN)'}}

                        </div>
                     @else
                        <div class="profile-usertitle-job">
                            {{'Owner of The Building'}}
                        </div>
                     @endif
                </div>




            <!--    <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>

-->


                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Profile </a>
                        </li>
						
						 <li>
                            <a href="{{route('upload.avatar')}}" target="">
                                <i class="glyphicon glyphicon-user"></i>
                                Change Profile Pic </a>
                        </li>
						
                        <li>

                            <a href="{{route('user.edit')}}" target="">
                                <i class="glyphicon glyphicon-refresh"></i>
                                Edit Profile </a>


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
        <div class="col-md-8">
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
                        <span class="posted_in"> <strong>Study Level:</strong> {{Auth::user()->userInfo->study_level}}</span>
                        <span class="posted_in"> <strong>Registration:</strong> {{Auth::user()->userInfo->reg}}</span>
                        <span class="posted_in"> <strong>Institute:</strong> {{Auth::user()->userInfo->institute}}</span>
                        <span class="posted_in"> <strong>Department:</strong> {{Auth::user()->userInfo->department}}</span>
                        <span class="posted_in"> <strong>Sessoin:</strong> {{Auth::user()->userInfo->session}}</span>
                        <span class="posted_in"> <strong>CGPA:</strong> {{Auth::user()->userInfo->cgpa}}</span>

                    </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>




@stop

