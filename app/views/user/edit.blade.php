@extends('layouts.default')
@section('content')
    @include('includes.alert')
    {{ Form::model($users, array('route' => 'user.update', 'method' => 'post', 'role' => 'form')) }}
    <div class="col-sm-offset-2 col-md-6">
        <!-- personal information -->
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Personal Information</legend>




            <div class="form-group">
                {{ Form::label('fullName', 'Complete Name *') }}
                {{ Form::text('fullName',null, array('class' => 'form-control')) }}

                {{$errors->first('fullName')}}
            </div>

            <div class="form-group">
                {{ Form::label('father', 'Father Name') }}
                {{ Form::text('father',null , array('class' => 'form-control')) }}
                {{$errors->first('father')}}
            </div>

            <div class="form-group">
                {{ Form::label('mother', 'Mother Name') }}
                {{ Form::text('mother',null , array('class' => 'form-control')) }}
                {{$errors->first('mother')}}
            </div>

            <div class="form-group">
                {{ Form::label('father_occup', 'Father Occupation') }}
                {{ Form::text('father_occup',null , array('class' => 'form-control')) }}
                {{$errors->first('father_occup')}}
            </div>
            <div class="form-group">
                {{ Form::label('mother_occup', 'Mother Occupation') }}
                {{ Form::text('mother_occup',null , array('class' => 'form-control')) }}
                {{$errors->first('mother_occup')}}
            </div>


            <div class="form-group">
                {{ Form::label('father_contact', 'Father Contact') }}
                {{ Form::text('father_contact',null , array('class' => 'form-control')) }}
                {{$errors->first('father_contact')}}
            </div>

            <div class="form-group">
                {{ Form::label('mother_contact', 'Mother Contact') }}
                {{ Form::text('mother_contact',null , array('class' => 'form-control')) }}
                {{$errors->first('mother_contact')}}
            </div>


            <div class="form-group">
                {{ Form::label('gender', 'Gender') }}
                {{ Form::select('gender', UserInfo::$genders, $users->gender, array('class' => 'form-control')) }}

                {{$errors->first('gender')}}
            </div>


            <div class="form-group">
                {{ Form::label('date_of_birth', 'Date of Birth') }}
                {{ Form::text('date_of_birth',null, array('class' => 'form-control', 'id' =>'date',  'autocomplete' => 'on')) }}

                {{$errors->first('date_of_birth')}}
            </div>




            <legend class="scheduler-border">Contact Information</legend>

            <div class="form-group">
                {{ Form::label('phone', 'Phone *') }}
                {{ Form::text('phone', null, array('class' => 'form-control')) }}

                {{$errors->first('contact')}}
            </div>

            <div class="form-group">
                {{ Form::label('fb_account', 'Facebook UserName *') }}
                {{ Form::text('fb_account', null, array('class' => 'form-control')) }}

                {{$errors->first('fb_account')}}
            </div>




            <legend class="scheduler-border">Permanent Address </legend>

            <div class="form-group">
                {{ Form::label('division', 'division') }}
                {{ Form::select('division', UserInfo::$division, $users->division, array('class' => 'form-control')) }}

                {{$errors->first('division')}}
            </div>

            <div class="form-group">
                {{ Form::label('district', 'District') }}
                {{ Form::text('district',null , array('class' => 'form-control')) }}

                {{$errors->first('district')}}
            </div>


            <div class="form-group">
                {{ Form::label('sub_district', 'Upazilla') }}
                {{ Form::text('sub_district',null , array('class' => 'form-control')) }}

                {{$errors->first('sub_district')}}
            </div>


            <div class="form-group">
                {{ Form::label('village', 'Village') }}
                {{ Form::text('village',null , array('class' => 'form-control')) }}

                {{$errors->first('village')}}
            </div>

            <div class="form-group">
                {{ Form::label('house', 'House No.') }}
                {{ Form::text('house',null , array('class' => 'form-control')) }}

                {{$errors->first('house')}}
            </div>

            <div class="form-group">
                {{ Form::label('city_corpo', 'City Corporation') }}
                {{ Form::select('city_corpo', UserInfo::$city_corpo, $users->city_corpo, array('class' => 'form-control','readonly')) }}

                {{$errors->first('city_corpo')}}
            </div>



            <legend class="scheduler-border">Academic Information</legend>



            <div class="form-group">
                {{ Form::label('study_level', 'Study Level') }}
                {{ Form::text('study_level',null, array('class' => 'form-control')) }}

                {{$errors->first('study_level')}}
            </div>


            <div class="form-group">
                {{ Form::label('reg', 'Registration Number') }}
                {{ Form::text('reg',null , array('class' => 'form-control')) }}

                {{$errors->first('reg')}}
            </div>


            <div class="form-group">
                {{ Form::label('institute', 'Institute') }}
                {{ Form::text('institute',null , array('class' => 'form-control')) }}

                {{$errors->first('institute')}}
            </div>

            <div class="form-group">
                {{ Form::label('department', 'Department') }}
                {{ Form::text('department',null , array('class' => 'form-control')) }}

                {{$errors->first('department')}}
            </div>


            <div class="form-group">
                {{ Form::label('session', 'Session') }}
                {{ Form::text('session',null , array('class' => 'form-control')) }}

                {{$errors->first('session')}}
            </div>

            <div class="form-group">
                {{ Form::label('cgpa', 'Cgpa') }}
                {{ Form::text('cgpa',null , array('class' => 'form-control')) }}

                {{$errors->first('cgpa')}}
            </div>

            <div>
                 {{ Form::hidden('id',$users->id) }}
                 {{ Form::submit('Update', array('class' => 'btn btn-lg btn-login btn-block')) }}
             </div>


 {{ Form::close() }}



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

