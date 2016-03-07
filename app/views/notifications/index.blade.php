@extends('layouts.default')

@section('content')
    <div>

        @if(count($notify))


            <div class="panel-heading">


{{$title}}



            </div>

            <table class="display table table-bordered table-striped" id="example">
                <thead>
                <tr>

                    <th class="text-center">id</th>

                    <th>Type</th>
                    <th>Subject</th>
                    <th>Body</th>
                    <th>Created at</th>



                </tr>
                </thead>
                <tbody>
                @foreach ($notify as $notification)
                    <tr>
                        <td>{{ $notification->id }}</td>
                        <td>{{ $notification->type }}</td>

                        <td>
                        @if($notification->type == 'user_request')
                            <a href="{{ route('manager.index') }}">{{ $notification->subject }}</a>


                        @elseif($notification->type == 'money')
                                <a href="{{ route('finance.index.normal') }}">{{ $notification->subject }}</a>



                        @elseif($notification->type == 'announce')
                                        <a href="{{ route('dashboard') }}">{{ $notification->subject }}</a>



                        @elseif($notification->type == 'manager_request')
                                <a href="{{ route('members') }}">{{ $notification->subject }}</a>


                        @endif


                        </td>

                        <td>{{ $notification->body }}</td>

                        <td>{{ $notification->created_at->format('Y-m-d') }}</td>



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
