@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-3 col-md-6">
                <div class="box">
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








        @stop