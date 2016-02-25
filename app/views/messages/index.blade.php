@extends('layouts.default')

@section('content')


    @include('includes.alert')



    @if($threads->count() > 0)


        @foreach($threads as $thread)
            @if(Auth::user()->name == $thread->creator()->name && $thread->participantsString(Auth::id()) )

        {{ $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; }}

        <div class="media alert {{$class}}">

            <h4 class="media-heading">{{link_to('Messages/' . $thread->id, $thread->subject)}}</h4>

            <p>{{$thread->latestMessage->body}}</p>


            <p><small><strong>Creator:</strong> {{ $thread->creator()->name }}</small></p>
            <p><small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small></p>


        </div>
        @endif

        @endforeach



    @else
        <p>Sorry, no threads.</p>
    @endif



@stop
