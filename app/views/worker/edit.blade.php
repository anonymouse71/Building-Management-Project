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


                    {{Form::model($user,['route' => ['worker.update',$user->id],  'method' => 'put' ])}}



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
                        {{ Form::label('phone', 'Worker Contact* :', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::text('phone', $user->userInfo->phone, array('class' => 'form-control', 'placeholder' => 'Enter contact number of  worker')) }}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group">
                        {{ Form::label('worker_type', 'Type of Worker:', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-8">
                            {{ Form::select('worker_type',$types,$worker_type ,array('class' => 'form-control','id' => 'status' , 'placeholder' => 'Select User Type')) }}
                        </div>
                        <br><br>
                    </div>



                    <br><br>


                    <div class="form-group">
                        <div class="col-lg-10">
                            {{ Form::submit('Update Worker', array('class' => 'btn btn-success')) }}
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