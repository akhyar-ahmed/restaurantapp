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
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> Add Expenses: </h2>
                            <hr>
                            	<form method="POST" action="{{ route('accounts-expense') }}">
                                    <div class="form-group col-xs-6">
                                        <input type="text-area" class="form-control" name="expense_reason" placeholder="Insert Expense Reason">
                                    </div>
                                    <div class="form-group col-xs-4">
                                        <input type="text" class="form-control" name="expense_ammount" placeholder="Insert Expense Ammount">
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
                            Mara KA !!
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
                            Mara KA !!
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