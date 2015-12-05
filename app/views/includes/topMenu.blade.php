<header class="header navbar ">
          <div class="sidebar-toggle-box ">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips" ></div>
          </div>
          <!--logo start-->
          <a href="{{route('dashboard')}}" class="logo" ><span  style="color:white">Building</span><span>Management</span></a>
          <!--logo end-->

          <div class="top-nav ">
              <ul class="nav pull-right top-menu">

                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                          {{ HTML::image(Auth::user()->userInfo->icon_url, 'alt', array( 'width' => 35, 'height' => 35 )) }}
                          <span  style="color:silver" class="username "><b>{{Auth::user()->user_name}}</b></span>
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









<style>
    .nav {
        background-color:  #026f7a;
    }

    .navbar {

        background-color: #026f7a;
    }

   .dropdown {

        background-color: #026f7a;
    }
    .dropdown-menu {

        background-color: #2b542c;
    }

    .sidebar-toggle-box {

        color: #ffffff;
    }


</style>