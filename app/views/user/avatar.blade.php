@extends('layouts.default')
@section('content')
    @include('includes.alert')

    <div class="form-group last">
        <label class="control-label col-md-3">Image Upload</label>

        {{ Form::open(array('role'=>'form','route' => 'upload.avatar', 'class' => 'form-horizontal','files' => true)) }}
        <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                    {{ HTML::image(Auth::user()->userInfo->avatar_url, 'alt', array()) }}
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                <div>
                                                   <span class="btn btn-white btn-file" style="width: 300px; height: 50px;">
                                                   <span class="fileupload-new">{{ Form::file('image', array('class' => 'form-control')) }}</span>



                                                   </span>
                </div>
            </div>
            <br><br>

                           <div><span>{{ Form::submit('Upload Avatar', array('class' => 'btn btn-primary')) }}</span></div>
        </div>
        {{ Form::close() }}

    </div>


@stop

@section('style')
    {{ HTML::style('css/bootstrap-fileupload.css') }}

@stop


@section('script')
    {{ HTML::script('js/bootstrap-fileupload.js') }}
@stop