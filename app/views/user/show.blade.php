@extends('layouts.default')
@section('content')
    @include('includes.alert')

    <div class="col-md-13">
        <section class="panel">
            <div class="panel-body">


                <div class="col-md-5">
                    <div class="col-md-11" >
                     {{ HTML::image(Auth::user()->userInfo->avatar_url, 'alt', array('class'=>" img-thumbnail")) }}
                        <br><br> <br><br>
                        <a href="{{route('upload.avatar')}}"><button type="button" class="btn btn-info"><i class="fa fa-image"></i> Change Profile Image</button></a>
                    </div>
                </div>


                <div class="col-md-7">
                     <h4 class="pro-d-title">
                         <h2><b> {{Auth::user()->userInfo->fullName}} </b></h2>
                     </h4>

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


                    <p class="product_meta">
                        <a href="{{route('user.edit')}}"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-pencil"></i> Edit Profile</button></a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@stop