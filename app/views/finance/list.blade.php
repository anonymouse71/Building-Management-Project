@extends('layouts.default')

@section('content')
    <div>
        <div class="col-md-8 col-md-offset-2">
        
         <h4 align="center">
             {{$title}}
         </h4>
         <div align="center">
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.create') }}">Record New Transaction</a>
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.index') }}">Full Financial Transaction History</a>

         </div>
         </br>

        @include('includes.alert')
        @if(count($devs))
            <table class="display table table-bordered " id="example">
                <thead>
                <tr>

                    <th>Flat ID</th>
                    <th>Flat Name</th>
                    <th>Total Credit (BDT)</th>
                    <th>Total Debit (BDT)</th>
                    <th>Status (BDT)</th>

                </tr>
                </thead>
                <tbody>
                @foreach($devs as $dev)
                    <tr>
                        <td>{{ $dev->id}}</td>

                        <td class="text-center">
                            <a class="btn btn-xs btn-info btn-edit" href="{{ URL::route('finance.show',$dev->id) }}">{{ $dev->name}}</a>
                        </td>

                        <td>{{ Money::credit($dev->id)}}</td>
                        <td>{{ Money::debit($dev->id)}}</td>
                        <td>{{ Money::credit($dev->id) - Money::debit($dev->id)}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        </div>
    </div>

@stop
