@extends('layouts.default')

@section('content')
@include('includes.alert')
    <div>
        @if(count($workers))

            <div class="panel-heading">
                {{$title}}

            </div>


            <table class="display table table-bordered table-striped" id="example">
                <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th>Flat</th>
                    <th>User</th>
                    <th>Subject</th>
                    <th>Details</th>

                    @if(Auth::user()->role_id ==2 || Auth::user()->role_id ==3)
                    <th>Status</th>
                    <th>Complain</th>
                    @endif
                    <th>Show</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($workers as $worker)
                    <tr>
                        <td>{{ $worker->id }}</td>

                        @if($worker->user_id== 1)
                        <td>{{'Admin' }}</td>

                        @else
                            <td> {{ Flat::where('id',$worker->flat_id)->pluck('name') }}</td>
                        @endif
                        <td> {{ User::where('id',$worker->user_id)->pluck('email') }}</td>

                        <td>{{str_limit($worker->subject, 15) }}</td>
                        <td>{{str_limit($worker->details, 32)}}</td>



                        @if(Auth::user()->role_id==4)

                            @if($worker->status == true )
                                <td style="color:green">Complete</td>
                            @else
                                <td style="color:yellowgreen">Pending</td>
                            @endif

                        @endif



                    @if(Auth::user()->role_id ==2 || Auth::user()->role_id ==3)

                            @if($worker->status == true )
                                <td style="color:green">Complete</td>
                            @else
                                <td><a href="{{route('workerTask.status', $worker->id)}}"><button class="btn btn-warning btn-xs btn-archive createBtn">Pending</button></a></td>

                            @endif


                         @if($worker->notify == true )
                            <td style="color:indianred">Complain sent</td>
                        @else
                            <td><a href="{{route('workerTask.complain', $worker->id)}}"><button class="btn btn-warning btn-xs btn-archive createBtn">Complain to Admin</button></a></td>
                        @endif
                    @endif



                        <td> <a><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$worker->id}}" >Details</button></a></td>
                        <!-- Modal -->
                        <div id="myModal_{{$worker->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content" >
                                    <center>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">
                                                {{ $worker->subject }}
                                            </h4>
                                        </div>
                                        <div class="modal-body" >

                                            <p><b>From: </b>
                                                @if($worker->user_id== 1)
                                                    <a>{{'Admin' }}</a>
                                                @else
                                                    <a> {{ User::where('id',$worker->user_id)->pluck('email') }}</a>
                                                @endif
                                            </p>

                                            <p><b>Flat: </b>
                                            @if($worker->user_id== 1)
                                                <a>{{'Null' }}</a>
                                            @else
                                                <a> {{ Flat::where('id',$worker->flat_id)->pluck('name') }}</a>
                                            @endif
                                            </p>

                                            <p><b>Description: </b>{{ $worker->details}}</p>

                                            <p><b>Status: </b>
                                             @if($worker->status == true )
                                                <a style="color:green">Complete</a>
                                             @else
                                                <a href="{{route('workers.status', $worker->id)}}"><button class="btn btn-warning btn-xs btn-archive createBtn">Pending</button></a>
                                             @endif
                                            </p>

                                        </div>
                                    </center>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modal -->

                    </tr>

                @endforeach
                </tbody>
            </table>

        @else
            No Data Found
        @endif
    </div>



@stop

@section('style')
    {{--{{ HTML::style('assets/data-tables/DT_bootstrap.css') }}--}}

@stop



@section('script')
    {{ HTML::script('assets/data-tables/jquery.dataTables.js') }}
    {{ HTML::script('assets/data-tables/DT_bootstrap.js') }}

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').dataTable({
            });
        });
    </script>

@stop
