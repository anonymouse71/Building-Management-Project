<!-- inbox dropdown start-->
<li id="header_inbox_bar" class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-important">
                            {{--\Cmgmyr\Messenger\Models\Message::msgCount();--}}

                          @if($count= Auth::user()->newMessagesCount() > 0)
                              <span class="label label-danger">{{$count}}</span>
                          @endif
                      </span>
    </a>
    <ul class="dropdown-menu extended inbox">
        <div class="notify-arrow notify-arrow-red"></div>

        <li>
            <p class="red">You have {{$count}} new messages</p>
        </li>



        @foreach(

        //DB::table('messages')->where('user_id','=' ,Auth::user()->id )->paginate(4)

        DB::table('messages')
            ->join('threads', 'messages.user_id', '=', 'threads.id')

            ->where('messages.user_id', !Auth::user()->id)->get()

         as $thread)

            <li>



                <a href="{{ route('messages.all',$thread->thread_id) }}">
                    <span class="label label-info"><i class="fa fa-comments-o"></i></span>

                                   <span class="from">{{$thread->body}}



                                       <span class="small italic"> {{--$thread->created_at->diffForHumans()--}}</span>
                </a>
            </li>
        @endforeach



        <li>
            <a href="{{ route('messages') }}">See all messages</a>
        </li>




    </ul>
</li>
<!-- inbox dropdown end -->