<header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="{{route('dashboard')}}" class="logo" >Admin<span>Template</span></a>
          <!--logo end-->

          <div class="top-nav ">
              <ul class="nav pull-right top-menu">

                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                          {{ HTML::image(Auth::user()->userInfo->icon_url, 'alt', array( 'width' => 35, 'height' => 35 )) }}
                          <span class="username">{{Auth::user()->user_name}}</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="{{route('user.show', Auth::user()->id)}}"><i class=" fa fa-suitcase"></i>Profile</a></li>

                          <li><a href="{{route('password.change')}}"><i class="fa fa-cog"></i> Change Password</a></li>
                          <li><a href="{{route('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>

                  <!-- user login dropdown end -->

              </ul>
          </div>
      </header>