@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
    <div class = "page-header container col-xs-12 form-group">
		<h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place Your Customer Order Here)</h3>
	</div>

	<div id="result" class = "container form-group col-xs-12">
    
    </div>
    <div class="card text-center">
        <div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item" id="mitem">
				<a class="HItem" href="#" style="color:white" id="0">Drinks</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="1">Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="2">Sides</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="3">Pizza</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="4">Curry</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="5">Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="6">Wrap</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="7">Burgers</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="8">Grilled</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="9"> Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="HItem" href="#" style="color:white" id="10">Special deals</a>
			</li>
			</ul>
        </div>
		<br>
        <div class="container card-block">

			<h3 align="left"><u>Shawarma</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="" alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Chicken shawarma</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Lamb shawarma</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Buffalo shawarma chicken</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Buffalo shawarma lamb</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Shawarma special</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Mix shawarma</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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

