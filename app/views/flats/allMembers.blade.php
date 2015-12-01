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

@foreach($user as $users)
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">


                    <div class="col-sm-6 col-md-4">

                        {{ HTML::image($users->userInfo->avatar_url, 'alt', array('class' =>'img-rounded img-responsive' )) }}
                    </div>


                    <div class="col-sm-6 col-md-8">
                        <h4>{{$users->userInfo->fullName}}</h4>
                        <small><cite title="San Francisco, USA">{{$users->flats->name}}, Uniliver Mess, Akhalia, Surma, Sylhet <i class="glyphicon glyphicon-map-marker">
                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$users->email}}
                            <br />

                            <i class="glyphicon glyphicon-gift"></i>{{$users->userInfo->date_of_birth}}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">

                                <li><a href="https://www.facebook.com/{{$users->userInfo->fb_account}}">Facebook</a></li>

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
