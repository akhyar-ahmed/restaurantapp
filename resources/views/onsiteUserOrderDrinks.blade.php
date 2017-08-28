@extends('usermain')

@section('title', "| Onsite-Orders ")
 
@section('content')
<div class="container">
    <div class = "page-header container col-xs-12 form-group">
		<div class = "col-xs-10">
			<h1 style="text-align:center; display:inline">Place Onsite Orders</h1>
		</div>
		<div class = "col-xs-2"  >
			<a href= "{{ route('onsite-orders-preview') }}" class = "btn btn-md btn-primary" role= "button" >Preview</a>
		</div>
	</div>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" >
            <li class="nav-item">
                <a class="TItem" href="{{ route('onsite-orders-drinks') }}" style="color:white">Drinks</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="{{ route('onsite-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
            </li>
            <li class="nav-item">
                <a class="TItem" href="{{ route('onsite-orders-sides') }}" style="color:white" >Sides</a>
            </li>

			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-spdeals') }}" style="color:white" >Special deals</a>
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
							<a  class="btn btn-success" id = "add" value = '1' ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '1'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Carrot Juice</h4>
							<a  class="btn btn-success" id = "add" value = '2'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '2'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Apple Juice</h4>
							<a  class="btn btn-success" id = "add" value = '3'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '3'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
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
							<a  class="btn btn-success" id = "add" value = '4'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '4'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Mix Fruit</h4>
							<a  class="btn btn-success" id = "add" value = '5'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '5'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<a  class="btn btn-success" id = "add" value = '6'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '6'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chamomile Tea</h4>
							<a  class="btn btn-success" id = "add" value = '7'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '7'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Jeanine Tea</h4>
							<a  class="btn btn-success" id = "add" value = '8'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '8'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
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
							<a  class="btn btn-success" id = "add" value = '9'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '9'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Green Tea</h4>
							<a  class="btn btn-success" id = "add" value = '10'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '10'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<h4 class="card-title">Coffee Latte</h4>
							<a  class="btn btn-success" id = "add" value = '11'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '11'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Cappuccino</h4>
							<a  class="btn btn-success" id = "add" value = '12'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '12'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">American</h4>
							<a  class="btn btn-success" id = "add" value = '13'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '13'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
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
							<a  class="btn btn-success" id = "add" value = '14'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '14'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Hot Chocolate</h4>
							<a  class="btn btn-success" id = "add" value = '15'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '15'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
							<h4 class="card-title">Banana Shake</h4>
							<a  class="btn btn-success" id = "add" value = '16'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '16'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Strawberry Shake</h4>
							<a  class="btn btn-success" id = "add" value = '17'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '17'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chocolate Shake</h4>
							<a  class="btn btn-success" id = "add" value = '18'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '18'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Ice Cream Funnel Shake</h4>
							<a  class="btn btn-success" id = "add" value = '19'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '19'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Orio Milkshake</h4>
							<a  class="btn btn-success" id = "add" value = '20'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '20'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
									<label><input type="radio" value = '21' name="radio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" value = '22' name="radio">1.5 L</label>
								</div>
							<a  class="btn btn-success" id = "add" value = 'A'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = 'A'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top"  src="" alt="" >
						<div class="card-block">
							<h4 class="card-title">Diet Pepsi</h4>
								<div class="radio-inline">
									<label><input type="radio" value = '23' name="radio">0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" value = '24'name="radio">1.5 L</label>
								</div>
							<a  class="btn btn-success" id = "add" value = 'B'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = 'B'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">7up</h4>
								<div class="radio-inline">
									<label><input type="radio" value = '25' name="radio" value='25'>0.33L</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" value = '26' name="radio">1.5 L</label>
								</div>
							<a  class="btn btn-success" id = "add" value = 'C'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = 'C'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
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
							<a  class="btn btn-success" id = "add" value = '27'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '27'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Tango apple</h4>
							<a  class="btn btn-success" id = "add" value = '28'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '28'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Fanta Orange</h4>
							<div class="radio-inline">
								<label><input type="radio" value = '29' name="radio">0.33L</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" value = '30' name="radio">1.5 L</label>
							</div>
							<a  class="btn btn-success" id = "add" value = 'D'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = 'D'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Miranda Orange</h4>
							<a class="btn btn-success" id = "add" value = '31'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id = "minus" value = '31'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Ayran</h4>
							<a class="btn btn-success" id = "add" value = '32'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id = "minus" value = '32'><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
				if(val != "A" && val !="B" && val != "C" && val!="D" ){
					$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/onsite-orders/add-drinks",
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
					
					var inputVal = $('input:radio[name=radio]:checked').val();
					//alert(inputVal+" "+val);
					//alert($('input:radio[name=optradio]:checked').val());
					if( (inputVal=="21" || inputVal=="22") && val == "A"){
						//alert($('input:radio[name=radio]:checked').val());

						$.ajaxSetup({
							headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});

						$.ajax({
							url: "/onsite-orders/add-drinks",
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
					else if( (inputVal=="23" || inputVal=="24") && val == "B"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});

						$.ajax({
							url: "/onsite-orders/add-drinks",
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
					else if( (inputVal=="25" || inputVal=="26") && val == "C"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/add-drinks",
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
					else if( (inputVal=="29" || inputVal=="30") && val == "D"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/add-drinks",
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
					else{
						alert('Please Correctly Select Radio Button');
					}
				}

			}
			else if( id == "minus"){
				if(val != "A" && val !="B" && val != "C" && val!="D" ){
					$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url: "/onsite-orders/delete-drinks",
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
					
					var inputVal = $('input:radio[name=radio]:checked').val();
					//alert(inputVal+" "+val);
					//alert($('input:radio[name=optradio]:checked').val());
					if( (inputVal=="21" || inputVal=="22") && val == "A"){
						//alert($('input:radio[name=radio]:checked').val());

						$.ajaxSetup({
							headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});

						$.ajax({
							url: "/onsite-orders/delete-drinks",
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
					else if( (inputVal=="23" || inputVal=="24") && val == "B"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});

						$.ajax({
							url: "/onsite-orders/delete-drinks",
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
					else if( (inputVal=="25" || inputVal=="26") && val == "C"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/delete-drinks",
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
					else if( (inputVal=="29" || inputVal=="30") && val == "D"){
						//alert($('input:radio[name=radio]:checked').val());
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/delete-drinks",
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
					else{
						alert('Please Correctly Select Radio Button');
					}
				}
			}
		});
	});
</script>
@endpush

