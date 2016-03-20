@extends('layouts.default')

@section('content')
    <div>

        @if(count($workers))


            <div class="panel-heading">


                <span class="pull-right">
                    <td><a href="{{-- route('flats.create') --}}"><button class="btn btn-success btn-xs btn-archive createBtn">Create New Flat</button></a></td>
                </span>




            </div>

            <table class="display table table-bordered table-striped" id="example">
                <thead>
                <tr>

                    <th class="text-center">id</th>

                    <th>ID</th>
                    <th>Subject</th>
                    <th>Details</th>





                </tr>
                </thead>
                <tbody>
                @foreach ($workers as $worker)
                    <tr>
                        <td>{{ $worker->id }}</td>
                        <td>{{ $worker->subject }}</td>

                        <td>{{ $worker->details }}</td>


<!--
                        @if($flats->payment_status == true )
                            <td style="color:green">Paymet Complete</td>
                        @else
                            <td><a href="{{-- route('flats.payment', $flats->id) --}}"><button class="btn btn-warning btn-xs btn-archive createBtn">Payment Incomplete</button></a></td>
                        @endif
-->


                        <td>{{-- $flats->created_at->format('Y-m-d') --}}</td>



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
