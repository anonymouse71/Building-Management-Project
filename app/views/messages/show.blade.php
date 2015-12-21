@extends('layouts.default')

@section('content')

    <div class="col-md-6">
        <h1>{{$thread->subject}}</h1>

        @foreach($thread->messages as $message)
            <div class="media">
                <a class="pull-left" href="#">
                   {{ HTML::image($message->user->userInfo->icon_url, 'alt', array( 'width' => 35, 'height' => 35 ,'class'=>'img-circle')) }}
                </a>
                <div class="media-body">
                    <h5 class="media-heading">{{$message->user->name}}</h5>
                    <p>{{$message->body}}</p>
                    <div class="text-muted"><small>Posted {{$message->created_at->diffForHumans()}}</small></div>
                </div>
            </div>
        @endforeach

        <h4>Add a new message</h4>
        {{Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT'])}}
        <!-- Message Form Input -->
        <div class="form-group">
            {{ Form::textarea('message', null, ['class' => 'form-control', 'size' => '4x5']) }}

        </div>

        @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{$user->name}}"><input type="checkbox" name="recipients[]" value="{{$user->id}}">{{$user->name}}</label>
            @endforeach
        </div>
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
        </div>
        {{Form::close()}}
    </div>
@stop


<style>
    h1{
        font-family: initial;
        background: #0E161F;
        color: whitesmoke;
    }
    .media-heading{
        color: steelblue;
    }
    div.text-muted {
        color: #ff6c60;
    }
</style>