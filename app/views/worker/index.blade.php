@extends('layouts.default')

@section('content')
    <div class="col-md-12">
        <div class="page-header">
            <h3>
                {{ $title }}
            </h3>

             <span class="pull-right">
                    <td><a href="{{ route('worker.create') }}"><button class="btn btn-success btn-xs btn-archive createBtn">Create New Worker</button></a></td>
                </span>
        </div>
        @include('includes.alert')
        <table class="display table table-bordered table-striped" id="example">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Worker Type</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Show</th>
            </tr>
            </thead>
            <tbody>


            @foreach($user as $users)
                <tr>
                    <td>{{ $users->name}}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->workers->worker_type }}</td>
                    <td>{{ $users->userInfo->phone }}</td>

                    <td><a class="btn btn-xs btn-success btn-edit" href="{{ URL::route('worker.edit', array('id' => $users->id)) }}">Edit</a></td>

                    <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{{ $users->id }}">Delete</a></td>

                    <td> <a><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$users->id}}" >Details</button></a></td>

                    <!-- Modal -->
                    <div id="myModal_{{$users->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content" >
                                <center>
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            {{ 'Worker Details' }}
                                        </h4>
                                    </div>
                                    <div class="modal-body" >

                                        <p><b>Name: {{ $users->name}}  </b></p>
                                        <p><b>Email: {{ $users->email }}  </b></p>
                                        <p><b>Worker Type: {{ $users->workers->worker_type }} </b></p>
                                        <p><b>Contact: {{$users->userInfo->phone}} </b></p>
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
                    Are you sure to delete this Member?
                </div>
                <div class="modal-footer">
                    {{ Form::open(array('route' => array('worker.delete',0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>





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

    <script type="text/javascript">
        $(document).ready(function() {

            // delete a member
            $('.deleteBtn').click(function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('worker.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

        });
    </script>
@stop