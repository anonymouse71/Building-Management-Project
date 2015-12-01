@extends('layouts.default')

@section('content')
    <div>
        <div class="col-md-8 col-md-offset-2">
        
         <h4 align="center">
             {{$title}}
         </h4>
         @if(Entrust::hasRole(Config::get('globalData.roles.Admin')))
         <div align="center">
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.create') }}">Record New Transaction</a>
         <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('finance.index') }}">Full Financial Transaction History</a>
         </div>
         </br>
         @endif
        @include('includes.alert')
        @if(count($transactions))
            <table class="display table table-bordered " id="example">
                <thead>
                <tr>

                    <th>Transaction ID</th>
                    <th>Date</th>
                    <th>Flat Name</th>
                    <th>Method</th>
                    <th>Cause</th>
                    <th>Credit (BDT)</th>
                    <th>Debit (BDT)</th>
                    

                </tr>
                </thead>
                <tbody>
                
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id}}</td>
                        <td>{{ $transaction->date}}</td>


                        <td class="text-center">
                            <a class="btn btn-xs btn-success btn-edit" >{{ $transaction->flats->name}}</a>
                        </td>


                        <td>{{ $transaction->method}}</td>
                        <td>{{ $transaction->title}}</td>
                        @if($transaction->type == 'credit')
                        <td>{{ $transaction->amount}}</td>
                        <td></td>
                        @elseif($transaction->type == 'debit')
                        <td></td>
                        <td>{{ $transaction->amount}}</td>
                        @endif
                        

                    </tr>
                @endforeach
                    <tr>
                        <td colspan="5">
                            Total Credit
                        </td>
                        <td>
                            {{$credit}}
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            Total Debit
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            {{$debit}}
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="5">
                            @if($status)
                            Remaining Payment
                            @else
                            Remaining Loan
                            @endif
                        </td>
                        <td colspan="2">
                            {{$final_amount}}
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
        </div>
    </div>

@stop
