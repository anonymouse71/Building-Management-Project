<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <a class="navbar-brand" href="{{ URL::route('dashboard') }}">{{ Config::get('myConfig.siteName') }}</a>

                    @if(!Auth::check())
                      <li><a href="{{ URL::route('login') }}">Login</a></li>
                      <li><a href="{{ URL::route('register') }}">Register</a></li>
                   @endif

                <!-- dashboard -->

                    <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>

                    </li>


                  {{-- Profile --}}
                  <li class="sub-menu">

                      <a href="javascript:">
                          <i class="fa fa-tasks"></i>
                          <span>Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a href="{{ route('user.show') }}">Profile</a></li>
                          <li><a href="{{ route('user.edit') }}">Edit Profile</a></li>


                      </ul>
                  </li>

                      {{-- log --}}
                      <li class="sub-menu">

                          <a href="javascript:">
                              <i class="fa fa-tasks"></i>
                              <span>Log</span>
                          </a>
                          <ul class="sub">
                              <li><a href="{{URL::route('log.all') }}">My Daily Log</a></li>
                              <li><a href="{{URL::route('log.create') }}">Create New Log</a></li>

                          </ul>
                      </li>






                  @if(Auth::user()->role_id == '1')

                          {{-- Member --}}
                          <li class="sub-menu">

                              <a href="javascript:">
                                  <i class="fa fa-tasks"></i>
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
                                  <i class="fa fa-tasks"></i>
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
                                  <i class="fa fa-tasks"></i>
                                  <span>Flat</span>
                              </a>
                              <ul class="sub">
                                  <li><a href="{{URL::route('flats.index') }}">Flat details</a></li>
                                  <li><a href="{{URL::route('flats.create') }}">Create New Flat</a></li>

                              </ul>
                          </li>


                          {{-- Whole Finance --}}
                          <li class="sub-menu">

                              <a href="javascript:">
                                  <i class="fa fa-tasks"></i>
                                  <span>Announcement</span>
                              </a>
                              <ul class="sub">
                                  <li><a href="{{URL::route('announces.index') }}">Announcement List</a></li>

                              </ul>
                          </li>



                  @endif

                   @if(Auth::user()->role_id == '2')

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

                              </ul>
                          </li>

                      @endif



                   @if(Auth::user()->role_id == '3')




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


                   @endif


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>