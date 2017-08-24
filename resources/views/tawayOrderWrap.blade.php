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

			<h3 align="left"><u>Wrap</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Chicken Shawarma Srap</h4>
                                    <div class="checkbox">
									<label><input type="checkbox" name="chips" value="1">Add Chips & Drinks</label>
                                    </div>
							<a class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Lamb Shawarma Wrap</h4>
                                <div class="checkbox">
									<label><input type="checkbox" name="chips" value="2">Add Chips & Drinks</label>
                                </div>
							<a class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Chicken Shish Kebab</h4>
                            <div class="checkbox">
							<label><input type="checkbox" name="chips" value="3">Add Chips & Drinks</label>
                            </div>
							<a class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>
			</div>

			<div class="row-sx-12">

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Kofta Wrap</h4>
								<div class="checkbox">
								<label><input type="checkbox" name="chips" value="4">Add Chips & Drinks</label>
								</div>
							<a  class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Lamb Shish Kebab</h4>
                                <div class="checkbox">
								<label><input type="checkbox" name="chips" value="5">Add Chips & Drinks</label>
                                </div>
							<a class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Mix Shawarma Wrap</h4>
                                <div class="checkbox">
								<label><input type="checkbox" name="chips" value="6">Add Chips & Drinks</label>
                                </div>
							<a class="btn btn-success" id="add" value="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="6"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
			//alert(id+" "+val);
			if($('input:checkbox[name=chips]:checked').val() != val)
				alert("Dhur Chudir Vai thik kori mar");
			else
				alert($('input:checkbox[name=chips]:checked').val());

		}
		else if( id == "minus"){
			alert(id+" "+val);
		}
	});
});
</script>
@endpush



