@extends('item_main')

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
            <li class="nav-item">
                <a class="TItem" href="{{ route('taway-orders-drinks') }}" style="color:white" id = "0">Drinks</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="{{ route('taway-orders-desert') }}" style="color:white" id = "1">Dessert & Ice Cream</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="{{ route('taway-orders-sides') }}" style="color:white" id = "2">Sides</a>
            </li>

			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-pizza') }}" style="color:white" id="3">Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-curry') }}" style="color:white" id="4">Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-shawarma') }}" style="color:white" id="5">Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-wrap') }}" style="color:white" id="6">Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-burgers') }}" style="color:white" id="7">Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-grilled') }}" style="color:white" id="8">Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-salads') }}" style="color:white" id="9"> Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('taway-orders-spdeals') }}" style="color:white" id="10">Special deals</a>
			</li>
			</ul>

        </div>

        <div class="card-block">

		<br>
        <div class="container card-block">

			<h3 align="left"><u>Fresh Juice</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Orange Juice</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Carrot Juice</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Apple juice</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Lemonade</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Mix Fruit</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>
	</div>

		<div class="container card-box">

			<h3 align="left"><u>Tea</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title"> English Tea</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chamomile Tea</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Jeanine Tea</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Peppermint Tea</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Green Tea</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>

			

			

        </div>

		<div class="container card-box">

			<h3 align="left"><u>Coffee</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Coffee latte</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Cappuccino</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">American</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Espresso</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Hot chocolate</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>

			

			

        </div>

		<div class="container card-box">

			<h3 align="left"><u>Milk Shakes</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Banana shake</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Strawberry shake</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chocolate shake</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Ice cream funnel shake</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Orio milkshake</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>


        </div>

		<div class="container card-box">

			<h3 align="left"><u>Soft Drinks</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top "  src="" alt="" >
						<div class="card-block">
							<h4 class="card-title">Pepsi</h4><br>
							    <div class="radio-inline">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top"  src="" alt="" >
						<div class="card-block">
							<h4 class="card-title">Diet Pepsi</h4><br>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">7up</h4><br>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Tango orange</h4>			
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Tango apple</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Fanta</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Miranda orange</h4>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Ayran</h4>
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
		$('.TItem').click(function(){
			var id = $(this).attr('id');
			if( id == 0){


			}
			else if( id == 1){

			}
			else if(id == 2){

			}
			else if(id==3){

			}
			else if( id == 4){

			}
			else if( id == 5){

			}
			else if( id == 6){

			}
			else if( id == 7){
				
			}
			else if( id == 8){
				
			}
			else if( id == 9){
				
			}
			else if( id == 10){
				
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

