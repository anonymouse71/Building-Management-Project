@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="breadcrumb">
                <li class="active">
                    <h4>
                        Edit Your Log
                    </h4>
                </li>
            </ul>

            @include('includes.alert')
            <div class="box box-info">
                {{Form::model($log,['route' => ['log.update',$log->id],  'method' => 'put' ])}}

                <div class="box-body">


                    <div class="form-group">
                        {{ Form::label('work', "Work Name", array('class' => 'control-label')) }}

                        {{ Form::text('work', null, array('class' => 'form-control', 'placeholder' => "")) }}

                    </div>

                    <div class="form-group">
                        {{ Form::label('debit', "Debit", array('class' => 'control-label')) }}

                        {{ Form::text('debit', null, array('class' => 'form-control', 'placeholder' => "")) }}

                    </div>




                    <div class="form-group">
                        {{ Form::label('credit', 'Credit', array('class' => 'control-label')) }}

                        {{ Form::text('credit', '', array('class' => 'form-control', 'placeholder' => '')) }}

                    </div>

                    <div class="form-group">
                        {{ Form::label('date', 'Date', array('class' => 'control-label')) }}

                        {{ Form::text('date', '', array('class' => 'form-control', 'placeholder' => '','id'=>'date')) }}

                    </div>



                    <div class="form-group">
                        {{ Form::label('desc', "Description", array('class' => 'control-label')) }}

                        {{ Form::textarea('desc', null, array('class' => 'form-control', 'placeholder' => "Description of Your Log", 'autofocus')) }}

                    </div>

                </div>
                <div class="box-footer">
                    {{ Form::submit('Update Log', array('class' => 'btn btn-success')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop



@section('style')
    {{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}
@stop

@section('script')


    {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}

    <script type="text/javascript">
        $(document).ready(function() {
            $("#date").datepicker({
                format: 'yyyy-mm-dd'
            });
            $( "#date" ).datepicker( "setDate", new Date() );



        });



    </script>
@stop




