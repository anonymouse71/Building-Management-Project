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
                    <li class="active"><a href="#" >Home</a></li>
                    <li class=""><a href="{{route('contact')}}" >Contact</a></li>
                    <li><a href="{{route('login')}}" >Login</a></li>
                    <li><a href="{{route('user.create')}}" >Sign Up</a></li>

                </ul>
            </div>

        </div>
    </div>

    <script>


    </script>

</header>
<!--/#header-->

<section id="home-slider">
    <div class="container">
        <div class="row">
            <div class="main-slider">
                <div class="slide-text">
                    <h1><b>Uniliver Building</b></h1>
                    <p>Uniliver Building is the world class building near Shahjalal University Of Science and Technology, Sylhet (SUST)<br>
                        Almost every person who lives in this building are the student of SUST.</p>
                    <a href="{{route('user.create')}}" class="btn btn-common">SIGN UP</a>
                </div>
                <img src="home/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                <img src="home/images/home/slider/house.png" class="slider-house" alt="slider image">
                <img src="home/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                <img src="home/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                <img src="home/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
            </div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="home/images/home/icon1.png" alt="">
                    </div>
                    <h2>Apartment</h2>
                    <p>This is an apartment building. We have 16 flats in our building.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="home/images/home/icon2.png" alt="">
                    </div>
                    <h2>Security</h2>
                    <p>When you are the member of our family our vision to give you best security at home.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="home/images/home/icon3.png" alt="">
                    </div>
                    <h2>24/7 Care</h2>
                    <p>We provide you 24-hours a day, 7 days a week care including holidays.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#services-->




<section id="action" class="responsive">
    <div class="vertical-center">
        <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">Uniliver Buliding For You</h1>
                        <p>Your choice, Our safety &amp; security.</p>
                    </div>
                    <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="tour-button">
                            <a href="{{route('contact')}}" class="btn btn-common">Contact For Your Apartment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->




<section id="features">
    <div class="container">
        <div class="row">

            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="home/images/home/image1.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>24/7 Electricity & Water</h2>
                    <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                </div>
            </div>

            <div class="single-features">
                <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Strong Security</h2>
                    <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                </div>
                <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="home/images/home/image2.png" class="img-responsive" alt="">
                </div>
            </div>

            <br>  <br>
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="home/images/home/image3.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Only For Bachelor's</h2>
                    <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/#features-->

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <p><img src="home/images/home/clients.png" class="img-responsive" alt=""></p>
                    <h1 class="title">Thank You</h1>
                    <p>Need an apartment!<br> Contact with us as soon as possible. <br> We will notify you, if any of our apartment remain empty.  </p>
                </div>
               <br><br><br>
            </div>
        </div>
    </div>
</section>
<!--/#clients-->






<!--Footer Starts -->


<div id="container">
    <div id="header"></div>
    <div id="body"></div>

    <div id="footer">

            <div class="copyright-text text-center">
                <p style="
                   color: #31302E;
                 ">&copy; Uniliver Building Management. All Rights Reserved.</p>
                 <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
            </div>

    </div>
</div>
<!-- End of footer-->



<script type="text/javascript" src="home/js/jquery.js"></script>
<script type="text/javascript" src="home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="home/js/lightbox.min.js"></script>
<script type="text/javascript" src="home/js/wow.min.js"></script>
<script type="text/javascript" src="home/js/main.js"></script>
</body>
</html>



<style>


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