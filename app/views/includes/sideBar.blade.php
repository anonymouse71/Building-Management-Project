<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <a class="navbar-brand" href="{{ URL::route('dashboard') }}">{{ Config::get('myConfig.siteName') }}</a>

                    @if(!Auth::check())
                      <li><a href="{{ URL::route('login') }}">Login</a></li>
                      <li><a href="{{ URL::route('register') }}">Register</a></li>
                     @endif





                            @if(Auth::user()->role_id == '1')


                                          <li>

                                              <a href="{{ URL::route('dashboard') }}">
                                                  <i class="fa fa-dashboard"></i>
                                                  <span>Dashboard</span>
                                              </a>

                                          </li>


                                          {{-- Member --}}
                                          <li class="sub-menu">

                                              <a href="javascript:">
                                                  <i class="fa fa-users"></i>
                                                  <span>Member</span>
                                              </a>
                                              <ul class="sub">
                                                  <li><a href="{{ route('flats.allMembers') }}">All Flat member List</a></li>
                                                  <li><a href="{{ route('members.view.distributor') }}">Owner List</a></li>
                                                  <li><a href="{{ route('members.view.client') }}">Member List</a></li>
                                                  <li><a href="{{ route('members') }}">Waiting List</a></li>

                                              </ul>
                                          </li>



                                          {{-- Whole Finance --}}
                                          <li class="sub-menu">

                                              <a href="javascript:">
                                                  <i class="fa fa-money "></i>
                                                  <span>Flat Finance Care </span>
                                              </a>
                                              <ul class="sub">
                                                  <li><a href="{{URL::route('finance.index') }}">Flat Total Finance</a></li>
                                                  <li><a href="{{URL::route('finance.create') }}">Record New Finance</a></li>

                                              </ul>
                                          </li>


                                          {{-- Whole Finance --}}
                                          <li class="sub-menu">

                                              <a href="javascript:">
                                                  <i class="fa fa-building-o"></i>
                                                  <span>Flat</span>
                                              </a>
                                              <ul class="sub">
                                                  <li><a href="{{URL::route('flats.index') }}">Flat details</a></li>
                                                  <li><a href="{{URL::route('flats.create') }}">Create New Flat</a></li>

                                              </ul>
                                          </li>


                                          {{-- Announce --}}
                                          <li class="sub-menu">

                                              <a href="javascript:">
                                                  <i class="fa fa-bullhorn"></i>
                                                  <span>Announcement</span>
                                              </a>
                                              <ul class="sub">
                                                  <li><a href="{{URL::route('announces.index') }}">Announcement List</a></li>
                                                  <li><a href="{{URL::route('announces.create') }}">Create Announcement</a></li>

                                              </ul>
                                          </li>


                                              {{-- T&C --}}
                                              <li class="sub-menu">

                                                  <a href="javascript:">
                                                      <i class="fa fa-microphone-slash"></i>
                                                      <span>Terms Of Con..</span>
                                                  </a>
                                                  <ul class="sub">
                                                      <li><a href="{{URL::route('terms.index') }}">T&C</a></li>
                                                      <li><a href="{{URL::route('terms.edit') }}">Edit T&C</a></li>

                                                  </ul>
                                              </li>


                                                  <li>
                                                      <a href="{{ URL::route('mail.create') }}">
                                                          <i class="fa fa-envelope-o"></i>
                                                          <span>Mail In Time</span>
                                                      </a>

                                                  </li>


                                                  {{-- Works --}}
                                                  <li class="sub-menu">

                                                      <a href="javascript:">
                                                          <i class="fa fa-tasks"></i>
                                                          <span>Worker</span>
                                                      </a>
                                                      <ul class="sub">
                                                          <li><a href="{{URL::route('worker.create')}}">Create Worker</a></li>
                                                          <li><a href="{{URL::route('worker.index')}}">Worker List</a></li>

                                                      </ul>
                                                  </li>


                                                  {{-- Works --}}
                                                  <li class="sub-menu">

                                                      <a href="javascript:">
                                                          <i class="fa fa-tasks"></i>
                                                          <span>Any Problem??</span>
                                                      </a>
                                                      <ul class="sub">
                                                          <li><a href="{{URL::route('workerTask.create') }}">Say Problem</a></li>
                                                          <li><a href="{{URL::route('workerTask.show') }}">Problem List</a></li>

                                                      </ul>
                                                  </li>






                  @endif

                                @if(Auth::user()->role_id == '2' && Auth::user()->userInfo->owner_approve== 1)

                                                      <li>

                                                          <a href="{{ URL::route('dashboard') }}">
                                                              <i class="fa fa-dashboard"></i>
                                                              <span>Dashboard</span>
                                                          </a>

                                                      </li>


                                                  {{-- Finance --}}
                                                  <li class="sub-menu">

                                                      <a href="javascript:">
                                                          <i class="fa fa-tasks"></i>
                                                          <span>Finance</span>
                                                      </a>
                                                      <ul class="sub">
                                                          <li><a href="{{URL::route('finance.index.normal') }}">Flat Total Finance</a></li>

                                                      </ul>
                                                  </li>

                                                  {{-- flats --}}
                                                  <li class="sub-menu">

                                                      <a href="javascript:">
                                                          <i class="fa fa-tasks"></i>
                                                          <span>Flat Members</span>
                                                      </a>
                                                      <ul class="sub">
                                                          <li><a href="{{URL::route('flats.members') }}">Flat Members</a></li>
                                                          <li><a href="{{URL::route('manager.index') }}">Waiting Members</a></li>

                                                      </ul>
                                                  </li>


                                                  {{-- Works --}}
                                                  <li class="sub-menu">

                                                      <a href="javascript:">
                                                          <i class="fa fa-tasks"></i>
                                                          <span>Any Problem??</span>
                                                      </a>
                                                      <ul class="sub">
                                                          <li><a href="{{URL::route('workerTask.create') }}">Say Problem</a></li>
                                                          <li><a href="{{URL::route('workerTask.show') }}">Problem List</a></li>

                                                      </ul>
                                                  </li>


                  @endif



                              @if(Auth::user()->role_id == '3' && Auth::user()->userInfo->owner_approve== 1)


                                              <li>

                                                  <a href="{{ URL::route('dashboard') }}">
                                                      <i class="fa fa-dashboard"></i>
                                                      <span>Dashboard</span>
                                                  </a>

                                              </li>


                                              {{-- Finance --}}
                                              <li class="sub-menu">

                                                  <a href="javascript:">
                                                      <i class="fa fa-tasks"></i>
                                                      <span>Finance</span>
                                                  </a>
                                                  <ul class="sub">
                                                      <li><a href="{{URL::route('finance.index.normal') }}">Flat Total Finance</a></li>

                                                  </ul>
                                              </li>



                                              {{-- Flat --}}
                                              <li class="sub-menu">

                                                  <a href="javascript:">
                                                      <i class="fa fa-tasks"></i>
                                                      <span>Flat Members</span>
                                                  </a>
                                                  <ul class="sub">
                                                      <li><a href="{{URL::route('flats.members') }}">Flat Members</a></li>

                                                  </ul>
                                              </li>


                                          {{-- Works --}}
                                          <li class="sub-menu">

                                              <a href="javascript:">
                                                  <i class="fa fa-tasks"></i>
                                                  <span>Any Problem??</span>
                                              </a>
                                              <ul class="sub">
                                                  <li><a href="{{URL::route('workerTask.create') }}">Say Problem</a></li>
                                                  <li><a href="{{URL::route('workerTask.show') }}">Problem List</a></li>

                                              </ul>
                                          </li>



                             @endif

                               @if(Auth::user()->role_id == '4' && Auth::user()->userInfo->owner_approve== 1)

                                                  <li>
                                                      <a href="{{ URL::route('workerTask.index') }}">
                                                          <i class="fa fa-dashboard"></i>
                                                          <span>Flat Problems</span>
                                                      </a>
                                                  </li>

                                  @endif

                  @if(Auth::user()->userInfo->owner_approve== 1)


                      {{-- log --}}
                      <li class="sub-menu">

                          <a href="javascript:">
                              <i class="fa fa-sitemap"></i>
                              <span>Log</span>
                          </a>
                          <ul class="sub">
                              <li><a href="{{URL::route('log.all') }}">My Daily Log</a></li>
                              <li><a href="{{URL::route('log.create') }}">Create New Log</a></li>

                          </ul>
                      </li>



                      {{-- Whole Message --}}
                      <li class="sub-menu">

                          <a href="javascript:">
                              <i class="fa fa-laptop "></i>
                              <span>Messenger</span>
                          </a>
                          <ul class="sub">
                              <li><a href="{{URL::route('messages') }}">All Message</a></li>
                              <li><a href="{{URL::route('messages.create') }}">New message</a></li>

                          </ul>
                      </li>





                  @else



                      {{-- Profile --}}
                      <li class="sub-menu">

                          <a href="javascript:">
                              <i class="fa fa-user-plus"></i>
                              <span>Profile</span>
                          </a>
                          <ul class="sub">
                              <li><a href="{{ route('user.show') }}">Profile</a></li>
                              <li><a href="{{ route('user.edit') }}">Edit Profile</a></li>


                          </ul>
                      </li>

                  @endif


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>