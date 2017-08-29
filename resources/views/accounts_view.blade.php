@extends('item_main')

@section('title', '| Accounts')

@section('content')
<!--akhyar -->
<div class = "container" >
    <div class = "page-header container col-xs-12 ">
		<div class = "form-group col-xs-10">
			<h1>Accounts</h1>
		</div>
    </div>
    <div class = "row"  >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Add Expenses')}} </div>
                <div class = "panel-body" >
                    <div class="row">
                        <div class="col-xs-12">
                            <h2> Add Expenses: </h2>
                            <hr>
                            	<form method="POST" action="{{ route('accounts-expense') }}">
                                     <label class="control-label col-xs-2">
                                        <font size = "5">Reason:</font>
                                    </label>
                                    
                                    <div class="form-group col-xs-4" align="left">
                                        <input type="text-area" class="form-control" name="expense_reason" placeholder="Insert Expense Reason">
                                    </div>
                                     <label class="control-label col-xs-2">
                                        <font size="5">Amount:</font>
                                    </label>
                                    <div class="form-group col-xs-2" align="left">
                                        <input type="text" class="form-control" name="expense_amount" placeholder="Expense Amount">
                                    </div>
                                    <div class="form-group col-xs-2">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" name="submit" value="Add" class="btn btn-success btn-lg">
                                    </div>
	                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @if(count($daily_incomes)>0)
    <div class = "row"  >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Sales Report')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> Daily Sales: </h2>
                            <hr>
                            <table class="container table  table-hover">
                                <thead>
                                <tr>
                                    <th> <font size="4"> Date </font> </th>
                                    <th> <font size="4"> Income </font></th>
                                    <th> <font size="4"> Expense </font></th>
                                    <th> <font size="4"> Expense Reason </font></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($daily_incomes as $ind => $orders)
                                    <tr id="row">
                                        <td>{{ $orders->day }}/{{$orders->month}}/{{$orders->year}} </td>
                                        <td>£ {{ $orders->income }} </td>
                                        <td>£ {{ $orders->expense }} </td>
                                        @if($orders->expense == 0)
                                        <td></td>
                                        @else
                                         <td>
                                         @foreach($expense as $expense)
                                            @foreach($expense as $ind1=>$expense1)
                                            {{$ind1+1}} {{". ".$expense1->reason_expense }}{{" - £ ". $expense1->ex_cost}}<br>
                                            @endforeach
                                            @break
                                            @endforeach
                                         </td>
                                         @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class = "row"  >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Sales Report')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> Daily Sales: </h2>
                            <hr>
                            <h3> No Daily Sales Recorded !! </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    @endif
    <br><br>
    @if(count($monthly_incomes)>0)
    <div class = "row"  >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Sales Report')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> Monthly Sales: </h2>
                            <hr>
                            <table class="container table  table-hover">
                                <thead>
                                <tr>
                                    <th> <font size = "4"> Month </font></th>
                                    <th> <font size = "4"> Income </font> </th>
                                    <th> <font size = "4"> Expense </font></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($monthly_incomes as $ind => $orders)
                                    <tr id="row">
                                        <td>{{$orders->month}}-{{$orders->year}} </td>
                                        <td>£ {{ $orders->income }} </td>
                                        <td>£ {{ $orders->expense }} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    @else
    <div class = "row"  >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Sales Report')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> Monthly Sales: </h2>
                            <hr>
                            <h3>No Monthly Sales Recorded !! </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    @endif
    <br><br>
@endsection