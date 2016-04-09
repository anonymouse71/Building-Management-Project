
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ URL::asset('home/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('home/css/responsive.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
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

                <a class="navbar-brand" href="{{route('index')}}">
                    <h1><img src="{{ URL::asset('home/images/logo.png') }}" alt="logo"></h1>
                </a>

            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="{{route('index')}}" >Home</a></li>
                    <li class=""><a href="{{route('contact')}}" >Contact</a></li>
                    <li><a href="{{route('login')}}" >Login</a></li>
                    <li><a href="{{route('user.create')}}" >Sign Up</a></li>

                </ul>
            </div>

        </div>
    </div>
</header>
<!--/#header-->


<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">About This Project</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="portfolio-information" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="uploads/image/defaultAvatar.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6">
                <div class="project-name overflow">
                    <h1 class="bold">Project Supervisor </h1>

                </div>
                <div class="project-info overflow">
                    <h2><b>Biswa Chakrabarty</b></h2>
                    <ul class="elements">
                        <li><i class="fa fa-angle-right"></i> Lecturer at Shahjalal University of Science & Technology.</li>
                        <li><i class="fa fa-angle-right"></i> Email: biswa-cse@sust.edu</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<!--/#portfolio-information-->

<section id="related-work" class="padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <h1 class="title text-center">Developers</h1>
            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="uploads/image/defaultAvatar.png" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.kiu.edu.pk/img/profile-default.gif" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-info ">
                        <br><br><br>
                        <h2><b>Md. Abu Talha</b></h2>
                        <h3>CSE, SUST</h3>
                        <h3>Reg: 2012331008</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="uploads/image/defaultAvatar.png" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.kiu.edu.pk/img/profile-default.gif" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-info ">
                        <br><br><br>
                        <h2><b>Farzad Bin Fazle</b></h2>
                        <h3>CSE, SUST</h3>
                        <h3>Reg: 2012331005</h3>
                    </div>
                </div>
            </div>
    </div>
</section>
<!--/#related-work-->





</body>
</html>
