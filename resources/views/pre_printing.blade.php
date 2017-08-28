 @extends('item_main')

@section('title', "| Order-Confirmation ")

@section('content')

    <div class = "page-header container row-xs-12 form-group">
		<div class = "form-group col-xs-12">
			<h1>Order-Confirmation</h1>
		</div>
	</div>
	<br>
<form method = "POST" class="form-group col-xs-12" action="{{ route('print') }}">
@if(count($order)>0)
<div class = "container form-group col-xs-12">
	<h2 align="middle"><u>Order Draft</u></h2>
	<table class="container table ">
	
		<thead>
			<tr>
				<th><font size="4">Order No</font></th>
				<th><font size="4">Item Name</font></th>
				<th><font size="4">Quantity</font></th>
				<th><font size="4">Net Total  ( £ )</font></th>
			</tr>
		</thead>

		@foreach($order as $ind => $items)
	  	<tr>
			<td>
			  <input type="text" class = "form-control" name="order_id[{{$ind}}]" value="{{ $items->order_id }}">
			</td>
	  		<td>
                <input type="text" class = "form-control" name="food_name[{{$ind}}]" value="{{ $items->food_name }}">
	  		</td>
	  		<td>
	  			<input type="text" class = "form-control" name="quantity[{{$ind}}]" value="{{ $items->quantity }}">
	  		</td>
	  		<td>
	  		    <input type="text" class = "form-control" name="net_total[{{$ind}}]" value="{{ $items->net_total }}">
	  		</td>
	  	</tr>
	  	@endforeach
	</table>
    <div class="container col-xs-12" >
    <br>
        <label class="control-label col-xs-4">
            <font size="5"> Grand Total ( £ )  </font>
        </label>
        <div class="col-xs-8">
	        <input type="text" class = "form-control" name="total" value="{{ $total }}">
        </div>
    </div>
    <div class="container col-xs-12" >
        <br> <br>
        <label class="control-label col-xs-2">
            <font size="3"> Recieved Cash ( £ )  </font>
        </label>
        <div class="col-xs-4">
            <input type="text" class = "form-control" name="recieved_cash" placeholder="Enter Recieved Cash">
        </div>

        <label class="control-label col-xs-2">
            <font size="3"> Discount Cash ( £ )  </font>
        </label>
        <div class="col-xs-4">
            <input type="text" class = "form-control" name="Discount" value = "0">
        </div>

    </div>

    <div class = "container col-xs-12" align="center">
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" role="botton" value="Print" class="btn btn-success btn-lg" >
    </div>

</div>
</form>
@endif
@endsection


