
@extends('layouts.default')
@section('content')
    @include('includes.alert')

<br><br>
    <div class="container">
        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">

                    <ul class="event-list">
                        <li>
                            <time datetime="2014-07-31 1600">

                                <h4><span class="month"> {{$log->date}}</span></h4>

                            </time>

                            <div class="info">
                                <h3><b>Subject:</b> {{ $log->work }}</h3>
                                <h3><b>Debit:</b> {{ $log->debit }}</h3>
                                <h3><b>Credit: </b>{{ $log->credit }}</h3>
                                <h3><b>Description:</b> {{ $log->desc }}</h3>

                            </div>
                        <center>
                            <td><a class="btn btn-xs btn-info btn-edit" href="{{ URL::route('log.edit', array('id' => $log->id)) }}">Edit</a></td>
                            <td><a class="btn btn-xs btn-danger btn-edit" href="{{ URL::route('log.delete', array('id' => $log->id)) }}">Delete</a></td>
                        </center>
                        <br>
                        </li>

                    </ul>

            </div>
        </div>
    </div>
@stop







<style>
    @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    body {
        padding: 60px 0px;
        background-color: rgb(220, 220, 220);
    }

    .event-list {
        list-style: none;
        font-family: 'Lato', sans-serif;
        margin: 0px;
        padding: 0px;
    }
    .event-list > li {
        background-color: rgb(255, 255, 255);
        box-shadow: 0px 0px 5px rgb(51, 51, 51);
        box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
        padding: 0px;
        margin: 0px 0px 20px;
    }
    .event-list > li > time {
        display: inline-block;
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: #25383C;
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
    }
    .event-list > li:nth-child(even) > time {
        background-color: rgb(165, 82, 167);
    }

    .event-list > li > .info {
        padding-top: 5px;
        text-align: center;
    }
    .event-list > li > .info > .title {
        font-size: 17pt;
        font-weight: 700;
        margin: 0px;
    }
    .event-list > li > .info > .desc {
        font-size: 13pt;
        font-weight: 300;
        margin: 0px;
    }





    @media (min-width: 6328px) {
        .event-list > li {
            position: relative;
            display: block;
            width: 100%;
            height: 120px;
            padding: 0px;
        }
        .event-list > li > time,
        .event-list > li > img  {
            display: inline-block;
        }
        .event-list > li > time,
        .event-list > li > img {
            width: 120px;
            float: left;
        }
        .event-list > li > .info {
            background-color: rgb(245, 245, 245);
            overflow: hidden;
        }
        .event-list > li > time,
        .event-list > li > img {
            width: 120px;
            height: 120px;
            padding: 0px;
            margin: 0px;
        }
        .event-list > li > .info {
            position: relative;
            height: 120px;
            text-align: left;
            padding-right: 40px;
        }
        .event-list > li > .info > .title,
        .event-list > li > .info > .desc {
            padding: 0px 10px;
        }
        .event-list > li > .info > ul {
            position: absolute;
            left: 0px;
            bottom: 0px;
        }
        .event-list > li > .social {
            position: absolute;
            top: 0px;
            right: 0px;
            display: block;
            width: 40px;
        }
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
        .event-list > li > .social > ul > li {
            display: block;
            padding: 0px;
        }
        .event-list > li > .social > ul > li > a {
            display: block;
            width: 40px;
            padding: 10px 0px 9px;
        }
    }
</style>
