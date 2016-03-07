<!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="fa fa-bell-o"></i>
                      <span class="badge bg-warning">

                           {{Notification::count()}}

                      </span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have  {{Notification::count()}} new notifications</p>
                      </li>



                      @foreach(Notification::allNotify() as $notification)





                          @if($notification->type == 'user_request')
                              <li>
                                  <a href="{{ route('manager.index') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>
                          @elseif($notification->type == 'money')
                              <li>
                                  <a href="{{ route('finance.index.normal') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>

                          @elseif($notification->type == 'announce')
                              <li>
                                  <a href="{{ route('dashboard') }}">
                                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>

                                      {{str_limit($notification->subject, 19);}}



                                      <span class="small italic"> {{$notification->created_at->diffForHumans()}}</span>
                                  </a>
                              </li>

                          @elseif($notification->type == 'manager_request')
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