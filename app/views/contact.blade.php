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
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <!--     <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                             <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
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
                    <li class="active"><a href="#" >Contact</a></li>
                    <li><a href="{{route('login')}}" >Login</a></li>
                    <li><a href="{{route('user.create')}}" >Sign Up</a></li>

                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
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
                            <h1 class="title">Contact US</h1>
                            <p>Stay close</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="map-section">
        <div class="container">
            <div id="map_container"></div>
            <div id="map"></div>
        </div>

    </section> <!--/#map-section-->




<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="home/images/home/under.png" class="img-responsive inline" alt="">
            </div>


 <!-- Testimonial Starts -->

                        <div class="col-md-4 col-sm-6">
                            <div class="testimonial bottom">
                                <h2>Testimonial</h2>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img src="home/images/home/profile1.png" alt="" id="circle"></a>
                                    </div>
                                    <div class="media-body">
                                        <blockquote>This is an awesome building I ever seen</blockquote>
                                        <h3><a href="#">- Abu Talha</a></h3>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img src="home/images/home/profile2.png" alt="" id="circle"></a>
                                    </div>
                                    <div class="media-body">
                                        <blockquote>I am the boss and this is my building  </blockquote>
                                        <h3><a href="">- Farzad Bin Fazle</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>


 <!-- Testimonial End -->




            <!--Address Start -->
            <div class="col-md-4 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:uniliversylhet@example.com">uniliversylhet@email.com</a> <br>
                        Phone: +88 01967 402131 <br>
                        Fax: +88 456 7891 <br>
                    </address>

                    <h2>Address</h2>
                    <address>
                        Uniliver Building,Elahi-8 <br>
                        Sylhet-Sunamganj Road, <br>
                        Akhaliya, Shurma, <br>
                        Sylhet,Bangladesh <br>
                    </address>
                </div>
            </div>

            <!--Address End -->



            <!--Contact Form Start -->
            <div class="col-md-4 col-sm-6">
                <div class="contact-form bottom">
                    <h2>Send a message</h2>

                    {{ Form:: open(array('url' => 'contact')) }}


                    @include('includes.alert')


                    <div class="form-group">
                        {{ Form:: label ('email', 'E-mail*')}}
                        {{ Form:: email ('email', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'me@example.com')) }}
                    </div>
                    <div class="form-group">
                        {{ Form:: label ('subject', 'Subject*') }}
                        {{ Form:: text ('subject', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your subject'))}}
                    </div>
                    <div class="form-group">
                        {{ Form:: label ('message', 'Message*' )}}
                        {{ Form:: textarea ('message', '',array('class'=>'form-control', 'required'=>'required','placeholder' => 'Message must contain 25 alphabets'))}}
                    </div>

                    <div class="form-group">
                        {{ Form::reset('Clear', array('class' => 'you css class for button')) }}
                        {{ Form::submit('Send', array('class' => 'you css class for button')) }}
                    </div>
                    {{ Form:: close() }}


                </div>
            </div>
            <!-- Contact Form End -->




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
</style>



<script>
    //google map code start
    $( document ).ready( function() {
        //Google Maps JS
        //Set Map
        function initialize() {
            var myLatlng = new google.maps.LatLng(24.908880,91.837885);
            var mapOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            //Callout Content
            var contentString = 'Some address here..';
            //Set window width + content
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 500
            });

            //Add Marker
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

            //Resize Function
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });
    //google map code end
</script>