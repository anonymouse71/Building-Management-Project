<header class="header navbar ">
    <div class="sidebar-toggle-box ">
        <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips" ></div>
    </div>


    <!--logo start-->
    <a href="{{route('index')}}" class="logo" ><span  style="color:white">Uniliver</span><span>Building</span></a>
    <!--logo end-->

    <div>

    <ul class="nav navbar-nav pull-right">

        <li><a href="{{ URL::route('index') }}">Home</a></li>
        <li><a href="{{ URL::route('login') }}">Login</a></li>
        <li><a href="{{ URL::route('user.create') }}">Register</a></li>
    </ul>
    </div>

</header>









<style>
    .nav {

        color: whitesmoke;
        font-family: cursive;
        font-size: large;
    }

    .navbar {

        background-color: #026f7a;
    }



    .sidebar-toggle-box {

        color: #ffffff;
    }

    .nav>li>a:hover, .nav>li>a:focus{
        text-decoration: none;
        background-color: #6a6a6a;
    }

    .navbar-nav>li>a {
        color: aliceblue;
        padding-bottom: 15px;
    }



</style>