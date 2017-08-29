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
				<th><font size="4">Type</font></th>
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
                <input type="text" class = "form-control" name="type" value="{{ $cat }}">
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
            <font size="4"> Recieved Cash ( £ )  </font>
        </label>
        <div class="col-xs-4">
            <input type="text" class = "form-control" name="recieved_cash" placeholder="Enter Recieved Cash">
        </div>

        <label class="control-label col-xs-2">
            <font size="4"> Discount Cash ( £ )  </font>
        </label>
        <div class="col-xs-4">
            <input type="text" class = "form-control" name="discount" value = "0">
        </div>

    </div>

    <div class = "container col-xs-12" >
        <br>
        <div class = "col-xs-6" align="right">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" role="botton" value="Print" class="btn btn-warning btn-lg" >
        </div>

        <div class = "col-xs-6" align="left">
            <a class="btn btn-success btn-lg" id="save">Save</a>
        </div>
    </div>

</div>
</form>
@endif
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		$('#save').click(function(){
            var n = $("input[name^='order_id']").length;
            var array = $("input[name^='order_id']");
            var order_id = array.eq(0).val();
            var type = $("input[name^='type']").val();
            var total = $("input[name^='total']").val();
            var r_total = $("input[name^='recieved_cash']").val();
            var discount = $("input[name^='discount']").val();
            //alert(total+" "+r_total+" "+discount);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/orders/approve-save",
                method: "POST",
                data: {
                    id:order_id,
                    cat: type,
                    total:total,
                    r_total:r_total,
                    discount:discount
                    },
                dataType: "text",
                success: function(data){
                    alert(data);
                }
            });
            
            /* for(i=0;i<n;i++)
            {
                card_value=  array.eq(i).val();
                alert(card_value);
            } */

            //alert($order);


        });
    });
</script>
@endpush


