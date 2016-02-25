@extends('layouts.default')
@section('content')

<style>
    body{padding-top:30px;}

    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
        display: block;
        line-height: 1.428571429;
        color: #999;
    }
</style>

@foreach($user as $user)
<div class="container">
    <div class="row">
        <div class="col-sm-offset-2 col-md-7">
            <div class="well well-sm">
                <div class="row">


                    <div class="col-sm-6 col-md-4">

                        {{ HTML::image($user->userInfo->avatar_url, 'alt', array('class' =>'img-rounded img-responsive' )) }}
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{$user->userInfo->fullName}}</h4>



                            <small><cite title="San Francisco, USA"> {{$user->flats->name}}, Uniliver,Sylhet <i class="glyphicon glyphicon-map-marker">


                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />

                            <i class="glyphicon glyphicon-gift"></i>{{$user->userInfo->date_of_birth}}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">

                                <li><a href="https://www.facebook.com/" target="_blank"{{$user->userInfo->fb_account}}>Facebook</a></li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endforeach
@stop