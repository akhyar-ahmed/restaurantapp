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
                <a class="TItem" href="#" style="color:white">Drinks</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="#" style="color:white">Dessert & Ice Cream</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="#" style="color:white">Sides</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Pizza</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Curry</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Shawarma</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Wrap</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Burgers</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Grilled</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white"> Salads & cold Mezze</a>
            </li>
			<li class="nav-item">
                <a class="TItem" href="#" style="color:white">Special deals</a>
            </li>
            </ul>
        </div>

        <div class="card-block">

		<br>
        <div class="container card-block">

			<h3 align="left"><u>Fresh Juice</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="" alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Orange Juice</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Carrot Juice</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Apple juice</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Lemonade</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Mix Fruit</h5>
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

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="" alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title"> English Tea</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Chamomile Tea</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Jeanine Tea </h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="https://ehonami.blob.core.windows.net/media/2016/05/can-peppermint-tea-pep-up-your-memory-800x600.jpg" alt="Card image cap" width="120" height="80">
						<div class="card-block">
							<h5 class="card-title">Peppermint Tea</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="https://cdn.authoritynutrition.com/wp-content/uploads/2013/09/cup-of-green-tea-with-leaves.jpg" alt="Green Tea" width="120" height="80">
						<div class="card-block">
							<h5 class="card-title">Green Tea</h5>
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

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="" alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Coffee latte</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Cappuccino</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">American</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Espresso</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Hot chocolate</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>

			

			

        </div>

		<div class="container card-box">

			<h3 align="left"><u>Milkshakes</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="" alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Banana shake</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Strawberry shake</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Chocolate shake</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Ice cream funnel shake</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Orio milkshake</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>


        </div>

		<div class="container card-box">

			<h3 align="left"><u>Soft Drinks</u></h3><br/>
			<div class="container row-xs-12" >

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top "  src="...." alt="Card image cap" >
						<div class="card-block">
							<h5 class="card-title">Pepsi</h5>
							    <div class="radio">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top img-responsive"  src="..." alt="Card image cap" >
						<div class="card-block">
							<h5 class="card-title">Diet Pepsi</h5>
								<div class="radio">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card" >
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">7up</h5>
								<div class="radio">
									<label><input type="radio" name="optradio">0.33L</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Tango orange</h5>			
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Tango apple</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>
			<br>
			<div class="container row-xs-12">

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Fanta</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Miranda orange</h5>
							<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-2">
					<div class="card">
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-block">
							<h5 class="card-title">Ayran</h5>
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

