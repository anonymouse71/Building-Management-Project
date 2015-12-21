@extends('layouts.default')
@section('content')
    @include('includes.alert')


    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">

            @foreach($user as $user)
                        {{ HTML::image($user->userInfo->avatar_url, 'alt', array('class'=>"  img-responsive")) }}
                    </div>


                    <div class="profile-usertitle">

                        <div class="profile-usertitle-name">
                            <p><b> {{$user->userInfo->fullName}} </b></p>
                        </div>

                        @if($user->flat_id != 0 && $user->role_id != 2)
                            <div class="profile-usertitle-job">
                                {{'Flat Name'}}    <h4> <b>{{$user->flats->name}}</b></h4> {{'(General Member)'}}
                            </div>
                        @elseif($user->role_id == 2)
                            <div class="profile-usertitle-job">
                                {{'Flat Name'}}    <h4> <b>{{$user->flats->name}}</b></h4> {{'(ADMIN)'}}

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

                            <li>
                                <a href="{{route('messages.create')}}">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    Send Message </a>
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
                            <span class="posted_in"> <strong>User Name:</strong> {{$user->name}}</span>
                            <span class="posted_in"> <strong>Email:</strong>  {{$user->email}}</span>
                            <span class="posted_in"> <strong>Gender:</strong> {{$user->userInfo->gender}}</span>
                            <span class="posted_in"><strong>Date of Birth:</strong> {{$user->userInfo->date_of_birth}}</span>
                        </div>

                        <h4><b>Personal Information</b></h4>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Father Name:</strong> {{$user->userInfo->father}}</span>
                            <span class="posted_in"> <strong>Mother Name:</strong> {{$user->userInfo->mother}}</span>
                            <span class="posted_in"> <strong>Father Contact:</strong> {{$user->userInfo->father_contact}}</span>
                            <span class="posted_in"> <strong>Father Occupation:</strong> {{$user->userInfo->father_occup}}</span>
                            <span class="posted_in"> <strong>Mother Contact:</strong> {{$user->userInfo->mother_contact}}</span>
                            <span class="posted_in"> <strong>Mother Occupation:</strong> {{$user->userInfo->mother_occup}}</span>

                        </div>

                        <h4><b>Contact Information</b></h4>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Phone Number:</strong> {{$user->userInfo->phone}}</span>
                            <span class="posted_in"> <strong>Facebook Account:</strong> {{$user->userInfo->fb_account}}</span>
                        </div>

                        <h4><b>Permanent Address</b></h4>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Division:</strong> {{$user->userInfo->division}}</span>
                            <span class="posted_in"> <strong>District:</strong> {{$user->userInfo->district}}</span>
                            <span class="posted_in"> <strong>Upazilla:</strong> {{$user->userInfo->sub_district}}</span>
                            <span class="posted_in"> <strong>Village:</strong> {{$user->userInfo->village}}</span>
                            <span class="posted_in"> <strong>House Address:</strong> {{$user->userInfo->house}}</span>
                            <span class="posted_in"> <strong>City Corporation:</strong> {{$user->userInfo->city_corpo}}</span>

                        </div>
                        <h4><b>Academic Information</b></h4>

                        <div class="product_meta">
                            <span class="posted_in"> <strong>Study Level:</strong> {{$user->userInfo->study_level}}</span>
                            <span class="posted_in"> <strong>Registration:</strong> {{$user->userInfo->reg}}</span>
                            <span class="posted_in"> <strong>Institute:</strong> {{$user->userInfo->institute}}</span>
                            <span class="posted_in"> <strong>Department:</strong> {{$user->userInfo->department}}</span>
                            <span class="posted_in"> <strong>Sessoin:</strong> {{$user->userInfo->session}}</span>
                            <span class="posted_in"> <strong>CGPA:</strong> {{$user->userInfo->cgpa}}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

@endforeach

</div>
@stop

