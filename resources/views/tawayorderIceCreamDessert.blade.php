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
            <li class="nav-item" >
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
		
        <div class="container card-block">
		<br>
			<h3 align="left"><u>Cakes</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-12">
					<div class="card">
						
						<div class="card-block">
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">White fruits</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Choco choco cream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Tarte strawberry</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Termeso</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Chocolate fudge cake</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Cheesecake</label>
                            </div>
                            <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                            <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

		</div>

        <div class="container card-block">

			<h3 align="left"><u>Ice-Creams</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-12">
					<div class="card">
					
						<div class="card-block">
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Chocolate ice cream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value=""> Banana funnel ice cream </label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Kiwi ice cream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" value="">Venilla ice cream</label>
                            </div>
                            
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

