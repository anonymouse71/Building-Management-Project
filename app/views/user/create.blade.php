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
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('assets/icheck/skins/square/green.css') }}


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
                    <li><a href="{{route('login')}}" >Login</a></li>
                    <li class="active"><a href="#" >Sign Up</a></li>

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
                        <h1 class="title">Create A Free Account</h1>
                        <p>Create Account and Stay Close</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->





<div class="container">
    <br><br><br>
    {{ Form::open(array('route' => 'user.create', 'method' => 'post', 'class' => 'form-signin')) }}

    <div class="col-sm-offset-2 col-md-7">
        @include('includes.alert')



        {{ Form::label('email', 'Email', array('' => '')) }}
        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) }}

        <br>
        {{ Form::label('name', 'Username', array('' => '')) }}
        {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Username', 'autofocus')) }}
        <br>

        {{ Form::label('flat_id', 'Flat Name ', array('' => '')) }}
        {{Form::select('flat_id', $flats, '',array('class' => 'form-control', 'id' => 'status', 'autofocus'))}}
        <br>
        <br>
        {{ Form::label('password', 'New Password', array('' => '')) }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password')) }}
        <br>
        {{ Form::label('password_confirmation', 'Confirm Password', array('' => '')) }}
        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}

        <br>

        <div class="form-group">
            {{ Form::label('role_id', 'Want To Register As : *') }}


            {{-- Form::radio('role_id','1') --}}
            {{-- Form::label('role_id','Admin') --}}
            <br>

    <span>
            {{ Form::radio('role_id','2') }}
        {{ Form::label('role_id','Manager        ') }}


        {{ Form::radio('role_id','3') }}
        {{ Form::label('role_id','Member') }}
    </span>
            <br/>

        </div>


<br>




<!--
        <div style="width:650px; height:180px; overflow: auto; background:gainsboro " >
            <h2><b>Terms of Service and Privacy Policy</b></h2>
            <p>5. London is the capital city of England. It is the most populous cit.</p>
            <p>6. London is the capital city of England. It is the most populous cit.</p>
            <p>7. London is the capital city of England. It is the most populous cit.</p>
        </div>

-->

<br>




        <div class="form-group">
		 		<span>
		 		<table width="100%" border="0">
                    <tr>
                        <td>{{Form::checkbox('agree', null)}}</td>

                        <td>{{ Form::label('agree', '.') }}</td>
                        <td><a href="{{URL::route('terms.index') }}">I agree to this Terms of Service and Privacy Policy</a></td>
                    </tr>
                </table>
		 		</span>
            <!-- <p class="error">{{--$errors->first('agree')--}}</p> -->
        </div>



        <!--start captcha -->

        {{ Form::label('Please confirm that you are not a Robot:') }}
        {{Recaptcha::render();}}

                <!--end captcha -->
        <br><!--end captcha -->
        {{ Form::submit('Register',array('class' => 'btn btn-lg btn-login btn-block', 'data-loading-text' => 'Loading...', )) }}


    </div>




    {{ Form::close() }}

</div>





<!--Footer Starts -->
<br><br><br><br><br><br><br><br>

<div id="container">
    <div id="header"></div>
    <div id="body"></div>

    <div id="footer">

        <div class="copyright-text text-center">
            <br><br><br><br>
            <p style="
                   color: #31302E;
                 ">&copy; Uniliver Building Management. All Rights Reserved.
                Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
        </div>

    </div>
</div>
<!-- End of footer-->





<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="home/js/gmaps.js"></script>
    <script type="text/javascript" src="home/js/jquery.js"></script>
    <script type="text/javascript" src="home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="home/js/lightbox.min.js"></script>
    <script type="text/javascript" src="home/js/wow.min.js"></script>
    <script type="text/javascript" src="home/js/main.js"></script>

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('assets/icheck/icheck.min.js') }}
    {{ HTML::script('js/ckeditor/ckeditor.js') }}



    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</body>
</html>

<script>


    $('#status').select2();

    $(document).ready(function(){



    });
</script>




<style>

    .btn{
        background: lightslategray;
    }

    #container {
        min-height:100%;
        position:relative;
    }

    #footer {
        position:absolute;
        bottom:0;
        width:100%;
        height:200px;  /* Height of the footer */

        background: url(../home/images/footer.jpg) repeat-x left bottom;
    }
    .copyright-text {
        color: tomato;
        font-family: cursive;
        font-size: small;
        text-align: center;
        top: 20px;
    }



</style>