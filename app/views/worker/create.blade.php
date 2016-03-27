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
                        {{ Form::label('name', 'Flat Name* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Flat Name')) }}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('rent_amount', 'Rent Amount/Month* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter Per Month Rent Amount')) }}
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group">
                        {{ Form::label('rent_amount', 'Rent Amount/Month* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('pass', null, array('class' => 'form-control', 'placeholder' => 'Enter Per Month Rent Amount')) }}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group">
                        {{ Form::label('rent_amount', 'Rent Amount/Month* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('rent_amount', null, array('class' => 'form-control', 'placeholder' => 'Enter Per Month Rent Amount')) }}
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


@stop

@section('script')



@stop