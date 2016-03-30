<!-- notification dropdown start-->
<li id="header_notification_bar" class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#"  onClick="test1();">

        <i class="fa fa-bell-o"></i>

                      <span class="badge bg-warning">


                                 <script>
                                     function test1()
                                     {
                                         <?php
                                            if(Auth::user()->role_id==1)
                                              $newCount = Notification::adminNcount();
                                            elseif(Auth::user()->role_id==2)
                                              $newCount = Notification::managerNcount();
                                            elseif(Auth::user()->role_id==3)
                                              $newCount = Notification::userNcount();
                                            elseif(Auth::user()->role_id==4)
                                              $newCount = Notification::workerNcount();


                                            Notification::zeroToOne(Auth::user()->id, $newCount);

                                         ?>
                                      }

                                 </script>


                          {{-- @if(Auth::user()->notify == 'y')--}}

                          @if(Auth::user()->role_id==1 &&  Notification::adminNcount() > Auth::user()->noty_count)
                              {{Notification::adminNcount() - Auth::user()->noty_count}}

                          @elseif(Auth::user()->role_id==2 && Auth::user()->userInfo->owner_approve == 1  && Notification::managerNcount() > Auth::user()->noty_count)
                              {{Notification::managerNcount() - Auth::user()->noty_count}}
                          @elseif(Auth::user()->role_id==3 && Auth::user()->userInfo->owner_approve == 1  &&  Notification::userNcount() > Auth::user()->noty_count)
                              {{Notification::userNcount() - Auth::user()->noty_count}}
                          @elseif(Auth::user()->role_id==4 && Auth::user()->userInfo->owner_approve == 1 &&  Notification::workerNcount() > Auth::user()->noty_count)
                              {{Notification::workerNcount() - Auth::user()->noty_count}}
                          @else
                              {{0}}

                          @endif
                          {{-- @else
                                                        {{0}}
                           @endif--}}
                      </span>
    </a>
    <ul class="dropdown-menu extended notification">
        <div class="notify-arrow notify-arrow-yellow"></div>
        <li>
            <p class="yellow">You have
                {{-- @if(Auth::user()->notify == 'y')--}}

                @if(Auth::user()->role_id==1 &&  Notification::adminNcount() > Auth::user()->noty_count)
                    {{Notification::adminNcount() - Auth::user()->noty_count}}

                @elseif(Auth::user()->role_id==2 && Auth::user()->userInfo->owner_approve == 1  && Notification::managerNcount() > Auth::user()->noty_count)
                    {{Notification::managerNcount() - Auth::user()->noty_count}}
                @elseif(Auth::user()->role_id==3 && Auth::user()->userInfo->owner_approve == 1  &&  Notification::userNcount() > Auth::user()->noty_count)
                    {{Notification::userNcount() - Auth::user()->noty_count}}
                @elseif(Auth::user()->role_id==4 && Auth::user()->userInfo->owner_approve == 1 &&  Notification::workerNcount() > Auth::user()->noty_count)
                    {{Notification::workerNcount() - Auth::user()->noty_count}}
                @else
                    {{0}}

                @endif
                {{-- @else
                                              {{0}}
                 @endif--}}
                new notifications</p>
        </li>






        @if(Auth::user()->role_id==1)

            @foreach(Notification::adminNoty() as $notification)
                <li>
                    @if(Auth::user()->role_id ==1)
                        <a href="{{ route('notifications.index') }}">
                            @elseif(Auth::user()->role_id ==2)
                                <a href="{{ route('notifications.manager') }}">
                                    @elseif(Auth::user()->role_id ==3)
                                        <a href="{{ route('notifications.user') }}">
                                            @else
                                                <a href="{{ route('notifications.worker') }}">
                                                    @endif

                                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                    {{str_limit($notification->subject, 13);}}
                                                    <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                                </a>
                </li>
            @endforeach


        @elseif(Auth::user()->role_id==2 && Auth::user()->userInfo->owner_approve == 1)



            @foreach(Notification::managerNoty() as $notification)
                <li>
                    @if(Auth::user()->role_id ==1)
                        <a href="{{ route('notifications.index') }}">
                            @elseif(Auth::user()->role_id ==2)
                                <a href="{{ route('notifications.manager') }}">
                                    @elseif(Auth::user()->role_id ==3)
                                        <a href="{{ route('notifications.user') }}">
                                            @else
                                                <a href="{{ route('notifications.worker') }}">
                                                    @endif
                                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                    {{str_limit($notification->subject, 13);}}
                                                    <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                                </a>
                </li>
            @endforeach




        @elseif(Auth::user()->role_id==3 && Auth::user()->userInfo->owner_approve == 1)


            @foreach(Notification::userNoty() as $notification)
                <li>
                    @if(Auth::user()->role_id ==1)
                        <a href="{{ route('notifications.index') }}">
                            @elseif(Auth::user()->role_id ==2)
                                <a href="{{ route('notifications.manager') }}">
                                    @elseif(Auth::user()->role_id ==3)
                                        <a href="{{ route('notifications.user') }}">
                                            @else
                                                <a href="{{ route('notifications.worker') }}">
                                                    @endif
                                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                    {{str_limit($notification->subject, 13);}}
                                                    <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                                </a>
                </li>
            @endforeach


        @elseif(Auth::user()->role_id==4 && Auth::user()->userInfo->owner_approve == 1)

            @foreach(Notification::workerNoty() as $notification)
                <li>
                    @if(Auth::user()->role_id ==1)
                        <a href="{{ route('notifications.index') }}">
                            @elseif(Auth::user()->role_id ==2)
                                <a href="{{ route('notifications.manager') }}">
                                    @elseif(Auth::user()->role_id ==3)
                                        <a href="{{ route('notifications.user') }}">
                                            @else
                                                <a href="{{ route('notifications.worker') }}">
                                                    @endif
                                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                    {{str_limit($notification->subject, 13);}}
                                                    <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                                </a>
                </li>
            @endforeach

        @else
            <li>
                <a href="#{{-- route('manager.index') --}}">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    {{ 'No New Notification'}}
                    <span class="small italic"> {{--$notification->created_at->diffForHumans()--}}</span>
                </a>
            </li>
        @endif








        <li>
            @if(Auth::user()->role_id ==1)
                <a href="{{ route('notifications.index') }}">See all notifications</a>
            @elseif(Auth::user()->role_id ==2)
                <a href="{{ route('notifications.manager') }}">See all notifications</a>
            @elseif(Auth::user()->role_id ==3)
                <a href="{{ route('notifications.user') }}">See all notifications</a>
            @else
                <a href="{{ route('notifications.worker') }}">See all notifications</a>
            @endif
        </li>
    </ul>
</li>
<!-- notification dropdown end -->







