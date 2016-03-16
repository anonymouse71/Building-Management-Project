@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">

                    <span class="pull-right">
               <!--     <a href=""><button class="btn btn-success"></button></a> -->
                </span>
                </header>

                <div class="panel-body">

                    {{ Form::open(array('route' => 'mail.send')) }}



                    <div class="form-group">
                        {{ Form::label('subject', "Subject:", array('class' => 'control-label')) }}
                        <div class="col-md-12">
                            {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' => 'Enter Mail Subject')) }}
                        </div>
                        <br><br><br><br>
                    </div>



                    <div class="form-group">
                        {{ Form::label('date', "Time when the mail will send(Day from today day like 15 day/ 16day):", array('class' => 'control-label')) }}
                        <div class="col-md-12">
                            {{ Form::text('date', null, array('class' => 'form-control', 'placeholder' => 'Enter Time')) }}
                        </div>
                        <br><br><br><br>
                    </div>




                    <div class="form-group">
                        {{ Form::label('details', "Mail Details:", array('class' => 'control-label')) }}
                        <div class="col-md-12">
                            {{ Form::textarea('details', null, array('class' => 'form-control', 'placeholder' => 'Enter Mail Details', 'id' => 'editor')) }}
                        </div>
                        <br><br>
                    </div>





                    <div class="form-group">
                        <div class="col-lg-10">
                            <br><br>
                            {{ Form::submit('Send Mail To All User', array('class' => 'btn btn-primary')) }}
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

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
@stop


@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('js/ckeditor/ckeditor.js') }}

    <script type="text/javascript">
        $(document).ready(function() {

            CKEDITOR.replace( 'editor', {
                "filebrowserImageUploadUrl": "{{asset('js/ckeditor/plugins/imgupload.php')}}"
            } );
            $("#status").chosen();


        });



    </script>
@stop





