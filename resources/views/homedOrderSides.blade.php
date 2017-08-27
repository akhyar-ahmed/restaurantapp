@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:center; display:inline">Place Home Delivery Orders</h1>
	</div>
	<div class = "col-xs-2"  >
		<a href= "{{ route('homed-orders-preview') }}" class = "btn btn-md btn-default" role= "button" style="background:transparent;color:white">Preview</a>
	</div>
	</div>

	<div id="result" class = "container form-group col-xs-12">

	</div>
    <div class="card text-center">
        <div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-sides') }}" style="color:white" >Sides</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-spdeals') }}" style="color:white" >Special deals</a>
			</li>
			</ul>
        </div>
		<br>
		<div class="container card-block">
		
			<h3 align="left"><u>Sides</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">BBQ wings</h4>
							<a  class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Chicken Dippers</h4>
							<a class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Garlic Bread</h4>
							<a class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>
			
			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Chicken Nuggets</h4>
							<a class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title"> Ponds Fried Cheese</h4>
							<a class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Fried Mushrooms</h4>
							<a class="btn btn-success" id="add" value="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="6"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Onion Rings</h4>
							<a class="btn btn-success" id="add" value="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="7"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Mozzarella Sticks</h4>
							<a class="btn btn-success" id="add" value="8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="8"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Potato Wedges</h4>
							<a class="btn btn-success" id="add" value="9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="9"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Falafel</h4>
							<a class="btn btn-success" id="add" value="10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="10"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Kubba</h4>
							<a class="btn btn-success" id="add" value="11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="11"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Rice</h4>
							<a class="btn btn-success" id="add" value="12"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="12"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Chips</h4>
							<div class="radio-inline">
								<label><input type="radio" value = '13' name="radio">Regular</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" value = '14' name="radio">Large</label>
							</div>
							<a class="btn btn-success" id="add" value="A"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="A"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-8">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Dips</h4>
								<label class="radio-inline">
									<input type="radio" name="dips" value="1">Garlic
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="2">Mayonnaise
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="3">Catchup
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="4">Tartar
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="5">Burger sauce
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="6">Chilli
								</label>
								<label class="radio-inline">
									<input type="radio" name="dips" value="7">Sweet chilli
								</label><br>
							<a class="btn btn-success" id="add" value="B"><span class="glyphicon glyphicon-plus" aria-hidden=""></span></a>
							<a class="btn btn-danger" id="minus" value="B"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>


			</div>

			

			

		</div>

		


		
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function(){
	$('a').click(function(){

		var id = $(this).attr('id');
		var val = $(this).attr('value');
		if( id == "add"){
			//alert(id+" "+val);
			if(val != 'A' && val!='B'){

				$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/add-sides",
						method: "POST",
						data: {
							item:val
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
			} else if(val == 'A') {
				var inputVal = $('input:radio[name=radio]:checked').val();
				if(inputVal != 13 && inputVal != 14)
					alert("Select Radio Button Properly !!");
				else{
					
					$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/add-sides",
						method: "POST",
						data: {
							item:inputVal
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			} else if(val == 'B') {
				var favorite = [];
				var toppings="";
				var dips = ["Garlic","Mayonnaise","Catchup","Tartar","Burger Sauce","Chilli Sauce", "Sweet Chilli"];
				
				$.each($("input[name='dips']:checked"), function(){           
					favorite.push($(this).val());
					toppings+=(dips[$(this).val() -1 ]+" ");
				});
				//alert(toppings);
				//alert(favorite.length);
				if(favorite.length==0)
					alert("Select Radio Button Properly !!");
				else{
					//alert(favorite.length);
					$.ajaxSetup({ 
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/add-sides",
						method: "POST",
						data: {
							item:15,
							topping:toppings,
							qua:favorite.length
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			}
			
		}
		else if( id == "minus"){
			//alert(id+" "+val);
			if(val != 'A' && val!='B'){

				$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/delete-sides",
						method: "POST",
						data: {
							item:val
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
			} else if(val == 'A') {
				var inputVal = $('input:radio[name=radio]:checked').val();
				//alert(inputVal);
				if(inputVal != 13 && inputVal != 14)
					alert("Select Radio Button Properly !!");
				else{
					
					$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/delete-sides",
						method: "POST",
						data: {
							item:inputVal
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			} else if(val == 'B') {
				var favorite = [];
				var toppings="";
				var dips = ["Garlic","Mayonnaise","Catchup","Tartar","Burger Sauce","Chilli Sauce", "Sweet Chilli"];
				
				$.each($("input[name='dips']:checked"), function(){           
					favorite.push($(this).val());
					toppings+=(dips[$(this).val() -1 ]+" ");
				});
				//alert(favorite.length);
				if(favorite.length==0)
					alert("Select Radio Button Properly !!");
				else{
					//alert(favorite.length);
					$.ajaxSetup({ 
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/homed-orders/delete-sides",
						method: "POST",
						data: {
							item:15,
							topping:toppings,
							qua:favorite.length
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			}
			}
	});
});
</script>
@endpush

