@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place Onsite Orders)</h3>
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

			<h3 align="left"><u>Grilled</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Shish Kebab</h4>
								<div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="1">Regular</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="2">Large</label>
                                </div><br>
							<a  class="btn btn-success" id="add" value="A"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="A"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4" >
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Lamb Shish Kebab</h4>
								<div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="3">Regular</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="4">Large</label>
                                </div><br>
							<a  class="btn btn-success" id="add" value="B"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="B"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4" >
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Kofta Kebab</h4>
								<div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="5">Regular</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="optradio" value="6">Large</label>
                                </div><br>
							<a  class="btn btn-success" id="add" value="C"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="C"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Mix Shish Kebab-L</h4>
							<a  class="btn btn-success" id="add" value="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="7"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Mix Grill Kebab</h4>
							<a  class="btn btn-success" id="add" value="8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="8"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Large Mix Grill</h4>
							<a  class="btn btn-success" id="add" value="9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="9"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Full Chicken Grill</h4>
							<a  class="btn btn-success" id="add" value="10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="10"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Half Chicken Grilled</h4>
							<a  class="btn btn-success" id="add" value="11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="11"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Grilled Salmon</h4>
							<a  class="btn btn-success" id="add" value="12"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="12"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-xs-12">
                
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Halloumi Aubergine</h4>
							<a  class="btn btn-success" id="add" value="14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="14"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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

