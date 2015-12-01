@extends('layouts.default');
@section('content');
<div class="row">
    <div class="col-md-12">
        @include('includes.alert')
        <section class="panel">
            <header class="panel-heading">

                <span class="pull-right">
                    <a href="{{ route('flats.index') }}"><button class="btn btn-success">Flat List</button></a>
                </span>
            </header>

            <div class="panel-body">

                {{ Form::open(array('route' => 'flats.store')) }}

                <div class="form-group">
                    {{ Form::label('name', 'Flat Name* :', array('class' => 'col-md-2 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Flat Name')) }}
                    </div>
                    <br><br>
                </div>


                <br><br>


                <div class="form-group">
                    <div class="col-lg-10">
                        {{ Form::submit('Create Flat', array('class' => 'btn btn-primary')) }}
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
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
@stop


@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <script type="text/javascript">

        $('#status').select2();
    </script>
@stop