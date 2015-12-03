@extends('layouts.default')

@section('content')
    <div>
        <div class="col-md-8 col-md-offset-2">
        
         <h3 align="center" >
             {{$title}}
         </h3>
         <div align="center">
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.create') }}">Record New Transaction</a>
       <a class="btn btn-success btn-sm btn-new-user" href="{{-- URL::route('finance.list') --}}">Report by Flat List</a>
         </div>
         </br>

        @include('includes.alert')
        @if(count($transactions))
            <table class="display table table-bordered " id="example">
                <thead>
                <tr>

                    <th>Transaction ID</th>
                    <th>Flat Name</th>
                    <th>Method</th>
                    <th>Cause</th>
                    <th>Credit (BDT)</th>
                    <th>Debit (BDT)</th>
                    <th>Date</th>
                    

                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id}}</td>
                        <td>{{ $transaction->flats->name}}</td>
                        <td>{{ $transaction->method}}</td>
                        <td>{{ $transaction->title}}</td>
                        @if($transaction->type == 'credit')
                        <td>{{ $transaction->amount}}</td>
                        <td></td>
                        @elseif($transaction->type == 'debit')
                        <td></td>
                        <td>{{ $transaction->amount}}</td>
                        @endif
                        <td>{{ $transaction->date}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        </div>
    </div>

@stop
