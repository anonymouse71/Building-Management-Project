@extends('layouts.default')

@section('content')


    @include('includes.alert')



    @if($threads->count() > 0)


        @foreach($threads as $thread)
            @if(Auth::user()->name == $thread->creator()->name && $thread->participantsString(Auth::id()) )

        {{ $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; }}

        <div class="media alert {{$class}}">




            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-md-7">
                        <div class="well well-sm">
                            <div class="row">





                                <div class="col-sm-6 col-md-8">
                                    <h4>{{link_to('Messages/' . $thread->id, $thread->subject)}}</h4>

                                    <p>{{$thread->latestMessage->body}}</p>


                                    <p><small><strong>Creator:</strong> {{ $thread->creator()->name }}</small></p>
                                    <p><small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small></p>



                                </div>
                                    Created   {{$thread->created_at->diffForHumans()}}
                                <br>
                                <a class="btn btn-xs btn-success btn-edit" href="{{URL::route('messages.create') }}">Create +</a>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
        @endif

        @endforeach



    @else
        <p>Sorry, no threads.</p>
    @endif



@stop

<style>
    body{padding-top:30px;}

    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
        display: block;
        line-height: 1.428571429;
        color: #999;
    }
</style>