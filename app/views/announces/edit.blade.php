
@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">

                    <span class="pull-right">
                   {{Form::model($announce,['route' => ['announces.update',$announce->id], 'class' => 'form-signin', 'method' => 'put' ])}}
                </span>
                </header>

                <div class="panel-body">


                    <div class="form-group">

                        {{ Form::label('details', "Announcement Details:", array('class' => 'control-label')) }}
                        <div class="col-md-12">
                            {{ Form::textarea('details', null, array('class' => 'form-control', 'placeholder' => 'Enter Article Details', 'id' => 'editor')) }}
                        </div>
                        <br><br>
                    </div>



                    <div class="form-group">
                        <div class="col-lg-10">
                            <br><br>
                            {{ Form::submit('Update Announce', array('class' => 'btn btn-primary')) }}
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