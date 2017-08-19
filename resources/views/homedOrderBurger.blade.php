@extends('main')

@section('title', "| OnSite-Orders ")

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
		<br>
        <div class="container card-block">

			<h3 align="left"><u>Burgers</u></h3><br/>
			
			<div class="row-xs-12" >
				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Zinger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" value="">Add Chips Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Fish burger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" value="">Add Chips Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Veg burger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" value="">Add Chips Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				
			</div>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Beef burger</h4>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="optradio">Regular</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="optradio">Large</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Add Chips Drinks</label>
                                    </div>
									<a  class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
									<a  class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken fillet</h4>
                                <div class="radio-inline">
                                    <label><input type="radio" name="optradio">Regular</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="optradio">Large</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Add Chips Drinks</label>
                                </div>
							<a  class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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

