@extends('item_main')

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
							<a href="#" class="btn btn-success" id = "add" value = '1' ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '1'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Carrot Juice</h4>
							<a href="#" class="btn btn-success" id = "add" value = '2'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '2'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Apple juice</h4>
							<a href="#" class="btn btn-success" id = "add" value = '3'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '3'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '4'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '4'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Mix Fruit</h4>
							<a href="#" class="btn btn-success" id = "add" value = '5'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '5'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '6'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '6'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chamomile Tea</h4>
							<a href="#" class="btn btn-success" id = "add" value = '7'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '7'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Jeanine Tea</h4>
							<a href="#" class="btn btn-success" id = "add" value = '8'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '8'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '9'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '9'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Green Tea</h4>
							<a href="#" class="btn btn-success" id = "add" value = '10'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '10'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '11'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '11'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Cappuccino</h4>
							<a href="#" class="btn btn-success" id = "add" value = '12'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '12'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">American</h4>
							<a href="#" class="btn btn-success" id = "add" value = '13'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '13'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '14'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '14'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Hot chocolate</h4>
							<a href="#" class="btn btn-success" id = "add" value = '15'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '15'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '16'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '16'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Strawberry shake</h4>
							<a href="#" class="btn btn-success" id = "add" value = '17'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '17'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chocolate shake</h4>
							<a href="#" class="btn btn-success" id = "add" value = '18'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '18'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '19'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '19'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Orio milkshake</h4>
							<a href="#" class="btn btn-success" id = "add" value = '20'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '20'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<h4 class="card-title">Pepsi</h4>
							    <div class="radio-inline">
									<label><input type="radio" id ='21' name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" id= '22' name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success" id = "add" value = '21'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '21'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top"  src="" alt="" >
						<div class="card-block">
							<h4 class="card-title">Diet Pepsi</h4>
								<div class="radio-inline">
									<label><input type="radio" id='23' name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" id = '24'name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success" id = "add" value = '22'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '22'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">7up</h4>
								<div class="radio-inline">
									<label><input type="radio" id = '25' name="optradio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" id = '26' name="optradio">1.5 L</label>
								</div>
							<a href="#" class="btn btn-success" id = "add" value = '23'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '23'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a href="#" class="btn btn-success" id = "add" value = '24'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '24'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Tango apple</h4>
							<a href="#" class="btn btn-success" id = "add" value = '25'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '25'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Fanta</h4>
							<a href="#" class="btn btn-success" id = "add" value = '26'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id = "minus" value = '26'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a class="btn btn-success" id = "add" value = '27'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id = "minus" value = '27'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Ayran</h4>
							<a class="btn btn-success" id = "add" value = '28'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '28'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
				if(val != "21" && val !="22" && val != "23" ){
					$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/taway-orders/add-drinks",
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
				else{
					
				}

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

