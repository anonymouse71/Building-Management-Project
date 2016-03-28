@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{$title}}
                    <span class="pull-right">
                    <a href="{{ route('worker.index') }}"><button class="btn btn-success">Worker List</button></a>
                </span>
                </header>

                <div class="panel-body">

                    {{ Form::open(array('route' => 'worker.store')) }}



                    <div class="form-group">
                        {{ Form::label('name', 'Worker Name* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Worker Name')) }}
                        </div>
                        <br><br>
                    </div>



                    <div class="form-group">
                        {{ Form::label('email', 'Worker Email* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter email of worker')) }}
                        </div>
                        <br><br>
                    </div>





                    <div class="form-group">
                        {{ Form::label('password', 'Worker Password* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('password', null, array('class' => 'form-control', 'placeholder' => 'Enter Worker Password')) }}
                        </div>
                        <br><br>
                    </div>



                    <div class="form-group">
                        {{ Form::label('worker_type', 'Type of Worker:', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::select('worker_type',$types,'' ,array('class' => 'form-control','id' => 'status' , 'placeholder' => 'Select User Type')) }}
                        </div>
                        <br><br>
                    </div>




                    <br><br>


                    <div class="form-group">
                        <div class="col-lg-10">
                            {{ Form::submit('Create Worker', array('class' => 'btn btn-success')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>
@stop

@section('style')

    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('assets/icheck/skins/square/green.css') }}
@stop

@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('assets/icheck/icheck.min.js') }}


    <script>
        $('#status').select2();
        $(document).ready(function(){

        });
    </script>
@stop