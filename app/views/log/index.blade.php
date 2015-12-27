@extends('layouts.default')

@section('content')
    <div>
        @if(count($logs))



<div class="panel-heading">
               <span class="pull-right">
                    <td><a href="{{ route('log.create') }}"><button class="btn btn-success btn-xs btn-archive createBtn">Create New Log</button></a></td>
                </span>


</div>

            <table class="display table table-bordered table-striped" id="example">
                <thead>
                <tr>

                    <th>User </th>
                    <th>Date</th>
                    <th>Work</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Description</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->user->user_name}}</td>
                        <td>{{ $log->date}}</td>
                        <td>{{ $log->work}}</td>
                        <td>{{ $log->debit}}</td>
                        <td>{{ $log->credit}}</td>
                        <td>>{{ $log->desc }}</td>



                          <td><a class="btn btn-xs btn-success btn-edit" href="{{ URL::route('log.edit', array('id' => $log->id)) }}">Edit</a></td>
                          <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{{ $log->id }}">Delete</a></td>


                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            No Data Found
        @endif

    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {{ Form::open(array('route' => array('log.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>

        </div>

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

            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('log.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });



        });
    </script>



@stop
