<!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="fa fa-bell-o"></i>
                      <span class="badge bg-warning">
                        @if(Auth::user()->role_id==1)
                              {{Notification:: adminNcount()}}
                              @else
                              {{Notification::count()}}

                          @endif

                      </span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have
                              @if(Auth::user()->role_id==1)
                                  {{Notification:: adminNcount()}}
                              @else
                                  {{Notification::count()}}

                              @endif

                              new notifications</p>
                      </li>



                      @foreach(Notification::allNotify() as $notification)





                          @if($notification->type == 'user_request'&& ! Auth::user()->role_id ==1 )
                              <li>
                                  <a href="{{ route('manager.index') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>
                          @elseif($notification->type == 'money' && ! Auth::user()->role_id ==1 )
                              <li>
                                  <a href="{{ route('finance.index.normal') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>

                          @elseif($notification->type == 'announce' && ! Auth::user()->role_id ==1 )
                              <li>
                                  <a href="{{ route('dashboard') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>

                          @elseif($notification->type == 'manager_request' && ! Auth::user()->role_id == 2 )
                              <li>
                                  <a href="{{ route('members') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>
                          @endif


                        @endforeach

                      <li>
                          <a href="{{ route('notifications.index') }}">See all notifications</a>
                      </li>
                  </ul>
              </li>
              <!-- notification dropdown end -->