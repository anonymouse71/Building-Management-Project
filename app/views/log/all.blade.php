@extends('layouts.default')
@section('content')


        <!--main content start-->
<section id="">
    <section class="wrapper">







        <!--Logs Block Start -->
        <div class="row">
            <div class="col-lg-12">
                <!--timeline start-->
                <section class="panel">
                    <div class="panel-body">
                        <div class="text-center mbot30">
                            <h3 class="timeline-title">Daily Logs</h3>
                            <p class="t-info">Logs can make your life Easier</p>
                        </div>

                        <?php $i=0; ?>
                        <div class="timeline">
                            @foreach($log as $log)

                                @if($log->id % 2)
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon red"></span>
                                                    <span class="timeline-date">08:25 am</span>
                                                    <h1 class="red">{{$log->date}} | Sunday</h1>
                                                    <p>{{$log->desc}}</p>
                                                    <br>
                                                    <div>
                                                        <a href="{{ route('log.show', $log->id) }}"><span class="glyphicon glyphicon-eye-open  btn btn-info btn-xs"></span></a>
                                                        <a href="{{ URL::route('log.edit', array('id' => $log->id)) }}"><span class="glyphicon glyphicon-edit btn btn-success btn-xs"></span></a>
                                                        <a href="{{ route('log.delete', $log->id) }}"><span class="glyphicon glyphicon-trash btn btn-danger btn-xs"></span></a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                @else
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon green"></span>
                                                    <span class="timeline-date">10:00 am</span>
                                                    <h1 class="green">{{$log->date}} | Wednesday</h1>
                                                    <p>{{$log->desc}}</p>
                                                    <br>
                                                    <div>
                                                        <a href="{{ route('log.show', $log->id) }}"><span class="glyphicon glyphicon-eye-open  btn btn-info btn-xs"></span></a>
                                                        <a href="{{ URL::route('log.edit', array('id' => $log->id)) }}"><span class="glyphicon glyphicon-edit btn btn-success btn-xs"></span></a>
                                                        <a href="{{ route('log.delete', $log->id) }}"><span class="glyphicon glyphicon-trash btn btn-danger btn-xs"></span></a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                @endif
                            @endforeach
                        </div>
                        <div class="clearfix">&nbsp;</div>

                    </div>
                </section>
            </div>
        </div>
        <!--Logs Block End -->






    </section>
</section>




<script src="js/jquery.js"></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>




<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>
@stop



