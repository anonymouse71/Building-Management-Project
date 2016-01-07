                                                 @extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">


                    <h2>
                        Add New Log
                    </h2>
<br>

            @include('includes.alert')
            <div class="">

                {{ Form::open(['route' => 'log.store', 'method' => 'post']) }}
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

                        {{ Form::textarea('desc', null, array('class' => 'form-control', 'placeholder' => "Description of Your Log",'id' => 'editor')) }}

                    </div>

                </div>
                <div class="box-footer">
                    {{ Form::submit('Create Log', array('class' => 'btn btn-success')) }}
                </div>
                {{ Form::close() }}

            </div>

        </div>
    </div>
    <br><br>
@stop



@section('style')
    {{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
@stop

@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('js/ckeditor/ckeditor.js') }}
    {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}

    <script type="text/javascript">
        $(document).ready(function() {

            CKEDITOR.replace( 'editor', {
                "filebrowserImageUploadUrl": "{{asset('js/ckeditor/plugins/imgupload.php')}}"
            } );
            $("#status").chosen();

            $("#date").datepicker({
                format: 'yyyy-mm-dd'
            });
            $( "#date" ).datepicker( "setDate", new Date() );



        });



    </script>
@stop





