<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> {{$title}}</title>

    <link href="{{ URL::asset('home/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/responsive.css') }}" rel="stylesheet">


    <![endif]-->
    <link rel="shortcut icon" href="{{ URL::asset('home/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('home/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="home/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<body>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="http://www.themeum.com"><i class="fa fa-google-plus"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <h1><img src="{{ URL::asset('home/images/logo.png') }}" alt="logo"></h1>
                </a>
            </div>


            @if(Auth::guest())
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="{{route('index')}}" >Home</a></li>
                        <li class=""><a href="{{route('contact')}}" >Contact</a></li>
                        <li><a href="{{route('login')}}" >Login</a></li>
                        <li><a href="{{route('user.create')}}" >Sign Up</a></li>

                    </ul>
                </div>
            @else
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <br>
                        <a href="{{route('dashboard')}}" class="btn btn-common">Back To Dashboard</a>

                    </ul>
                </div>
            @endif

        </div>
    </div>

    <script>


    </script>

</header>
<!--/#header-->

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">{{ $flat->name }} - {{$title}}</h1>
                        <p>Stay close</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->



<!--Contact Form Start -->
<div class="col-sm-offset-3 col-md-7">
    <div class="contact-form bottom">

        <br>
       <p><b>  {{'Rent Amount: $'}} </b>{{$flat->rent_amount}}</p>

        <br>
        {{$flat->flat_details}}


        <br><br><br><br><br><br>

    </div>
</div>
<!-- Contact Form End -->






<footer id="footer">
    <div class="container">
        <div class="row">
            <div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Uniliver Building Management. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- End of footer-->


</body>
</html>


<style>
    #circle {
        border-radius:50% 50% 50% 50%;
        width:81px;
        height:81px;
    }
    .copyright-text p {
        color: tomato;
        font-family: cursive;
        font-size: xx-small;
    }



    #map_container{
        position: relative;
    }
    #map{
        height: 0;
        overflow: hidden;
        padding-bottom: 22.25%;
        padding-top: 30px;
        position: relative;
    }

    .btn-common:hover, .btn-common:focus{
        background: yellowgreen;
    }
</style>



