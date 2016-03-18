@extends('layouts.default')
@section('content')


        <!--main content start-->
<section id="">
    <section class="wrapper">

        <!--state overview start-->
        <div class="row state-overview">

            <!--User-->
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                           {{ User::count();}}
                        </h1>
                        <p>Total Users</p>
                    </div>
                </section>
            </div>

            <!--User-->
            @if(Auth::user()->role_id ==1)
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-male"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            {{ User::where('role_id', '=', 1)
			                  ->count();}}
                        </h1>
                        <p>Admin</p>
                    </div>
                </section>
            </div>

@else

                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="fa fa-male"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count2">
                                {{ User::where('flat_id', '=', Auth::user()->flat_id)
                                  ->whereNotNull('flat_id')
                                  ->count();}}
                            </h1>
                            <p>Flat Members</p>
                        </div>
                    </section>
                </div>
            @endif

            <!--User-->
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                         {{DB::table('participants')->where('user_id', '=', Auth::user()->id)->count();}}

                        </h1>
                        <p>New Messages</p>
                    </div>
                </section>
            </div>
            <!--User-->
            @if(Auth::user()->role_id ==1)

                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol blue">
                            <i class="fa fa-building-o"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count4">
                                {{ Flat::count();}}
                            </h1>
                            <p> Flats</p>
                        </div>
                    </section>
                </div>
        </div>



            @else
                <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol blue">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            {{ Money::credit(Auth::user()->flat_id) - Money::debit(Auth::user()->flat_id)}}
                        </h1>
                        <p>Payment Status</p>
                    </div>
                </section>
            </div>
        </div>
        @endif
        <!--state overview end-->



<br><br>


<!--Announce Block Start-->
        <div class="row">
            <div class="col-lg-12">
                <!--custom chart start-->
                <div class="border-head">
                    <h3></h3>
                </div>
                <div class="custom-bar-chart">
                    <div class="box col-sm-offset-1 col-md-10">
                        <div class="box-icon">
                            <span class="fa fa-4x fa-bell-o"></span>
                        </div>

                        <div class="info">
                            <h4 class="text-center">Latest Announcement</h4>
                            <p>{{DB::table('announces')->orderBy('id', 'DESC')->pluck('details');}}</p>
                            <!--    <a href="" class="btn btn-small ">Older</a> -->
                        </div>
                    </div>
                </div>
            </div>
      </div>
        <!--Announce Block end-->






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


                        <div class="timeline">
                            @foreach($log as $logs)

                          @if($logs->id % 2)
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon red"></span>
                                                <span class="timeline-date">{{$logs->date}}</span>
                                                <h1 class="red">{{$logs->work}} | <a href="{{ route('log.show', $logs->id) }}"><span class="glyphicon glyphicon-eye-open  btn btn-danger btn-xs"></span></a></h1>

                                                <p>{{$logs->desc}}</p>

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
                                                <span class="timeline-date">{{$logs->date}}</span>
                                                <h1 class="green">{{$logs->work}} | <a href="{{ route('log.show', $logs->id) }}"><span class="glyphicon glyphicon-eye-open  btn btn-info btn-xs"></span></a></h1>
                                                <p>{{$logs->desc}}</p>

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



@stop



