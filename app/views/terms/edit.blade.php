@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">


                </header>

                <div class="panel-body">

                    {{Form::model($term,['route' => ['terms.update',$term->id],  'method' => 'put' ])}}


                    <div class="form-group">
                        {{ Form::label('details', 'Terms Details :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::textarea('details', null, array('class' => 'form-control', 'placeholder' => 'Enter Terms and conditions','id' => 'editor')) }}
                        </div>


                        <br><br>
                    </div>
                    <br><br>


                    <div class="form-group">
                        <div class="col-lg-10">
                            {{ Form::submit('Update T&C', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>
@stop

@section('style')


    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
@stop



@section('script')


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