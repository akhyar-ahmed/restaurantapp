@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place Take-Away Orders)</h3>
	</div>
	<div class = "col-xs-2"  >
		<a href= "{{ route('taway-orders-preview') }}" class = "btn btn-md btn-default" role= "button" style="background:transparent;color:white">Preview</a>
	</div>
	</div>

	<div id="result" class = "container form-group col-xs-12">

	</div>
    <div class="card text-center">
        <div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-drinks') }}" style="color:white">Drinks</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-sides') }}" style="color:white" >Sides</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-spdeals') }}" style="color:white" >Special deals</a>
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
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-6">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Chips</h4>
							<a class="btn btn-success" id="add" value="13"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="13"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Chips Large</h4>
							<a class="btn btn-success" id="add" value="14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="14"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-12">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Dips</h4>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="14">Garlic
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="15">mayonnaise
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="16">Catchup
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="17">tartar
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="18">Burger sauce
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="19">chilli
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="20">Sweet chilli
								</label><br>
							<a class="btn btn-success" id="add" value="A"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="A"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
			alert(id+" "+val);
			if(val != 'A'){

				$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/taway-orders/add-sides",
						method: "POST",
						data: {
							item:val
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
			} else{

			}
			
		}
		else if( id == "minus"){
			alert(id+" "+val);
			$.ajaxSetup({
				headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/taway-orders/delete-sides",
					method: "POST",
					data: {
						item:val
						},
					dataType: "text",
					success: function(data){
						console.log(data);
					}
				});
			}
	});
});
</script>
@endpush

