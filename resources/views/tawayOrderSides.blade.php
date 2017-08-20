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
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">BBQ wings</h4>
							<a  class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Dippers</h4>
							<a class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Garlic bread</h4>
							<a class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			
			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken nuggets</h4>
							<a class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title"> Ponds fried cheese</h4>
							<a class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Fried mushrooms</h4>
							<a class="btn btn-success" id="add" value="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="6"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Onion rings</h4>
							<a class="btn btn-success" id="add" value="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="7"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">mozzarella sticks</h4>
							<a class="btn btn-success" id="add" value="8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="8"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">potato wedges</h4>
							<a class="btn btn-success" id="add" value="9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="9"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Falafel</h4>
							<a class="btn btn-success" id="add" value="10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="10"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Kubba</h4>
							<a class="btn btn-success" id="add" value="11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="11"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Rice</h4>
							<a class="btn btn-success" id="add" value="12"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="12"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

			<div class="row-xs-12">

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chips</h4>
							<a class="btn btn-success" id="add" value="13"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="13"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Dips</h4>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="1">Garlic
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="2">mayonnaise
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="3">Catchup
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="4">tartar
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="5">Burger sauce
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="6">chilli
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dips" value="7">Sweet chilli
								</label><br>
							<a class="btn btn-success" id="add" value="14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="14"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
			

		}
		else if( id == "minus"){
			alert(id+" "+val);
		}
	});

	$('#search_text').keyup(function(){
		var txt = $(this).val();
		if( txt != '') {
			$.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "/food-orders/searchfood",
				method: "POST",
				data: {
					search:txt
					},
				dataType: "text",
				success: function(data){
					$('#result').html(data);
				}
			});

		}
		else {
			$('#result').html('');

			$.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "/food-orders/searchfood",
				method: "POST",
				data: {
					search:txt
					},
				dataType: "text",
				success: function(data){
					$('#result').html(data);
				}
			});
		}
	});
	$('#search_text').keydown(function(){
		var txt = $(this).val();
		if( txt != '') {
			$.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "/food-orders/searchfood",
				method: "POST",
				data: {
					search:txt
					},
				dataType: "text",
				success: function(data){
					$('#result').html(data);
				}
			});

		}
		else {
			$('#result').html('');
			
			$.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "/food-orders/searchfood",
				method: "POST",
				data: {
					search:txt
					},
				dataType: "text",
				success: function(data){
					$('#result').html(data);
				}
			});
		}
	});
});
</script>
@endpush

