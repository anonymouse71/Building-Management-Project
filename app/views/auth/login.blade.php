<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> {{$title}}</title>
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/css/font-awesome.min.css" rel="stylesheet">
    <link href="home/css/animate.min.css" rel="stylesheet">
    <link href="home/css/lightbox.css" rel="stylesheet">
    <link href="home/css/main.css" rel="stylesheet">
    <link href="home/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="home/js/html5shiv.js"></script>
    <script src="home/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="home/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="home/images/ico/apple-touch-icon-144-precomposed.png">
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
                    <h1><img src="home/images/logo.png" alt="logo"></h1>
                </a>

            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="{{route('index')}}" >Home</a></li>
                    <li class=""><a href="{{route('contact')}}" >Contact</a></li>
                    <li class="active"><a href="#" >Login</a></li>
                    <li><a href="{{route('user.create')}}" >Sign Up</a></li>


                </ul>
            </div>

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
                        <h1 class="title">Log In</h1>
                        <p>Stay close</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->






<div class="container">
<br><br><br>
    {{ Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-signin')) }}

    <div class="col-sm-offset-0 col-md-7">
        @include('includes.alert')

        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) }}<br>
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

        <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
		                </span>
        </label>
        {{ Form::submit('Log in', array('class' => 'btn btn-lg btn-login ')) }}
                <!--   <center><h4><a href="{{-- route('user.create') --}}">Sign Up Now!!</a></h4></center> -->
    </div>
    {{ Form::close() }}




            <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>

                    {{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post')) }}

                    {{ Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off')) }}

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                    {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</div>

    <!--Footer Starts -->

<br><br><br><br>

                     <div class="col-sm-12">
                    <div class="copyright-text text-center">
                           <p>&copy; Uniliver Building Management. All Rights Reserved.</p>
                            <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                       </div>






<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="home/js/gmaps.js"></script>
<script type="text/javascript" src="home/js/jquery.js"></script>
<script type="text/javascript" src="home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="home/js/lightbox.min.js"></script>
<script type="text/javascript" src="home/js/wow.min.js"></script>
<script type="text/javascript" src="home/js/main.js"></script>
</body>
</html>




<style>
    .copyright-text {
        color: tomato;
        font-family: cursive;
               font-size: xx-small;
            font-size: small;
            text-align: center;
            top: 20px;
    }


    .modal-footer{
    background: teal;
    }

    .modal-header{
      /* background: teal;*/
    }

</style>