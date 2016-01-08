@extends('layouts.default')

@section('content')
  <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.14/jquery.jscrollpane.min.css">
 {{ HTML::style('css/message.css') }}


<div class="window-wrapper">
    <div class="window-title">
        <div class="dots">
            <i class="fa fa-circle"></i>
            <i class="fa fa-circle"></i>
            <i class="fa fa-circle"></i>
        </div>
        <div class="title">
            <span>Uniliver Building Messenger</span>
        </div>
        <div class="expand">
            <i class="fa fa-expand"></i>
        </div>
    </div>
    <div class="window-area">
        <div class="conversation-list">
            <ul class="">
                <li class="item"><a href="#"><i class="fa fa-list-alt"></i><span>Dashboard</span></a></li>
                <li class="item active"><a href="#"><i class="fa fa-user"></i><span>Team chat</span><i class="fa fa-times"></i></a></li>
                <li><a href="#"><i class="fa fa-circle-o online"></i></i><span>Cucu Ionel</span><i class="fa fa-times"></i></a></li>
                <li><a href="#"><i class="fa fa-circle-o idle"></i></i><span>Jan Dvo?�k</span><i class="fa fa-times"></i></a></li>
                <li><a href="#"><i class="fa fa-circle-o offline"></i></i><span>Clark Kent</span><i class="fa fa-times"></i></a></li>
                <li><a href="#"><i class="fa fa-circle-o offline"></i></i><span>Ioana Marcu</span><i class="fa fa-times"></i></a></li>
            </ul>


            <div class="my-account">
                <div class="image">
                    {{ HTML::image(Auth::user()->userInfo->icon_url, 'alt', array( 'width' => 25, 'height' => 25 )) }}>
                    <i class="fa fa-circle online"></i>
                </div>

                <div class="name">
                    <span>{{Auth::user()->name}}</span>


                </div>


            </div>

        </div>



        <!-- Message Main Body -->
        <div class="chat-area">
            <div class="title"><b>{{$thread->subject}}</b><i class="fa fa-search"></i></div>


            <div class="chat-list">
                <ul>


                    @foreach($thread->messages as $message)
                    <li class="me">
                        <div class="name">
                            <span class=""> {{ HTML::image($message->user->userInfo->icon_url, 'alt', array( 'width' => 20, 'height' => 20 ,'class'=>'img-circle')) }} <br> {{$message->user->name}}</span>
                        </div>
                        <div class="message">
                            <p>{{$message->body}}</p>
                            <span class="msg-time">Posted {{$message->created_at->diffForHumans()}}</span>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>


            <div class="input-area">
                <div class="input-wrapper">

                    {{Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT'])}}
                    {{ Form::text('message', null )}}
                    <i class="fa fa-smile-o"></i>
                    <i class="fa fa-paperclip"></i>
                </div>

                {{ Form::submit('Submit', ['class' => 'send-btn']) }}
            </div>

        </div>


        <div class="right-tabs">
            <ul class="tabs" >
                <li class="active">
                    <a href="#"><i class="fa fa-users"></i></a>
                </li>
                <li><a href="#" id="flip"><i class="fa fa-paperclip"></i></a></li>
                <li><a href="#"><i class="fa fa-link"></i></a></li>
            </ul>



              <!--All User List -->
            <ul class="tabs-container">
                <li class="">
                    <ul class="member-list">
                        @if($users->count() > 0)
                            @foreach($users as $user)
                          <!--   <li><span class="status online"><i class="fa fa-circle-o"></i></span><span>{{--$user->name--}}</span></li> -->
                                <label title=" {{$user->name}}"><input type="checkbox" name="recipients[]" value="{{$user->id}}">{{$user->name}}</label>
                            @endforeach
                        @endif
                    </ul>
                </li>

                <li></li>
                <li></li>
            </ul>
            <!--End of All User List -->







            {{Form::close()}}


            <i class="fa fa-cog"></i>
        </div>
    </div>
</div>
@stop




<script>
    $(function()
    {
        $('.chat-area > .chat-list').jScrollPane({
            mouseWheelSpeed: 30
        });
    });
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideDown("slow");
        });
    });

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
<!--<script src="js/count.js"></script>-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.14/jquery.jscrollpane.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>