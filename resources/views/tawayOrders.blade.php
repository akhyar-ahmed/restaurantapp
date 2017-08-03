@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
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

