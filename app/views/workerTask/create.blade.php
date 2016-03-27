@extends('layouts.default')

@section('content')

@include('includes.alert')


<!--main content start-->
<section id="">
    <section class="">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">

                      <span class="pull-left">
                          <button type="button" id="loading-btn" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i> {{$title}}</button>
                      </span>
                <br>
            </header>
        </section>

        <div class="row">
            <div class="col-md-8">
                <section class="panel">

                    {{ Form::open(array('route' => 'workerTask.store')) }}
                    <div class="form-group">
                        {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' => 'Enter Problem Subject')) }}

                        <br><br>
                    </div>

                    <div class="form-group">
                            {{ Form::textarea('details', null, array('class' => 'form-control', 'placeholder' => 'Enter Problem Details','id' => 'editor')) }}

                        <br><br>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10">
                            {{ Form::submit('Say Your Problem', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </section>
            </div>


            <div class="col-md-4">
                <section class="panel">
                    <header class="panel-heading">
                        <button class="btn btn-info btn-xs"> Important Contact Number:</button>
                    </header>
                    <div class="panel-body">
                        <a href="#"><img src="https://lilpickmeupdotcom.files.wordpress.com/2014/04/problem-solution-620x285.gif" alt="" height="200" width="300"/></a>
                        <br><br>
                        <ul class="list-unstyled p-files">
                            <h4><a href="#"><i class="fa fa-file-text"></i> Police: +88 01923456823</a></h4>
                            <h4><a href="#"><i class="fa fa-picture-o"></i> Fire Service: +88 01923467823</a></h4>
                            <h4><a href="#"><i class="fa fa-mail-forward"></i>Hospital: +88 01924556823 </a></h4>
                            <h4><a href="#"><i class="fa fa-file"></i> RAB: +88 01924556823 </a></h4>
                        </ul>
                        <br/>
                    </div>
                </section>
            </div>


        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

@stop


@section('style')
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/style-responsive.css') }}

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