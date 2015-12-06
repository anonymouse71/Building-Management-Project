@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 align="center">
             {{$title}}
         </h2><br><br>
         <div align="center">
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.index') }}">Full Financial Transaction History</a>
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.list') }}">Report by Flat List</a>
         </div>


            @include('includes.alert')
            <div class=" box-info">

                {{ Form::open(['route' => 'finance.store', 'method' => 'post']) }}

                <div class="box-body">
<br><br>
                    <div class="form-group col-md-6">
                        {{ Form::label('flat_id', 'Flat', array('class' => 'control-label required')) }}

                        {{ Form::select('flat_id', $flats, '', array('class' => 'form-control', 'id' => 'user_id', 'required'   => 'required')) }}

                    </div>

                    <div class="form-group col-md-6">
                        {{ Form::label('amount', "Amount", array('class' => 'control-label')) }}

                        {{ Form::text('amount', null, array('class' => 'form-control', 'placeholder' => "", 'required'   => 'required')) }}

                    </div>

                   

                    <div class="form-group col-md-6">
                        {{ Form::label('type', 'Transaction Type', array('class' => 'control-label required')) }}

                        {{ Form::select('type', $types, '', array('class' => 'form-control', 'id' => 'type', 'required'   => 'required')) }}

                    </div>

                    

                    <div class="form-group col-md-6">
                        {{ Form::label('method', 'Transaction Method', array('class' => 'control-label required')) }}

                        {{ Form::select('method', $method, '', array('class' => 'form-control', 'id' => 'method', 'required'   => 'required')) }}

                    </div>

                     <div class="form-group col-md-6">
                        {{ Form::label('title', "Project Name/Reason", array('class' => 'control-label')) }}

                        {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus', 'required'   => 'required')) }}

                    </div>


                    <div class="form-group col-md-6">
                        {{ Form::label('date', 'Date', array('class' => 'control-label')) }}

                        {{ Form::text('date', '', array('class' => 'form-control', 'placeholder' => '','id'=>'date', 'required'   => 'required')) }}

                    </div>








                </div>
                <div class="box-footer col-md-6 col-md-offset-3" align=center>
                    {{ Form::submit('Record Transaction', array('class' => 'btn btn-success')) }}
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

            $('#type').on('change', function() {
              var type = this.value ; 
              if(type === "debit"){
                $("#method").val("Bank");
                $("#title").val("Cash"); 
              }
              if(type === "credit"){
                $("#method").val("CentralDeposit");
                $("#title").val(""); 
              }
            });

        });



    </script>
@stop





