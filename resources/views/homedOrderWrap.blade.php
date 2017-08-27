@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:center; display:inline">Place Home Delivery Orders</h1>
	</div>
	<div class = "col-xs-2"  >
		<a href= "{{ route('homed-orders-preview') }}" class = "btn btn-md btn-default" role= "button" style="background:transparent;color:white">Preview</a>
	</div>
	</div>

	<div id="result" class = "container form-group col-xs-12">

	</div>
    <div class="card text-center">
        <div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-sides') }}" style="color:white" >Sides</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-spdeals') }}" style="color:white" >Special deals</a>
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
							<h4 class="card-title">Chicken Shawarma Wrap</h4>
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
			if($('input:checkbox[name=chips]:checked').val()){
				if($('input:checkbox[name=chips]:checked').val() != val)
					alert("Please Perfectly Select The Checkbox !!");
				else{
					
					//alert($('input:checkbox[name=chips]:checked').val());
					$.ajaxSetup({ 
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
					$.ajax({
						url: "/homed-orders/add-wrap",
						method: "POST",
						data: {
							item:val,
							addi:1
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			}
			else{
				$.ajaxSetup({ 
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
				$.ajax({
					url: "/homed-orders/add-wrap",
					method: "POST",
					data: {
						item:val,
						addi:0
						},
					dataType: "text",
					success: function(data){
						console.log(data);
					}
				});
				
			}
		}
		else if( id == "minus"){
			if($('input:checkbox[name=chips]:checked').val()){
				if($('input:checkbox[name=chips]:checked').val() != val)
					alert("Please Perfectly Select The Checkbox !!");
				else{
					
					//alert($('input:checkbox[name=chips]:checked').val());
					$.ajaxSetup({ 
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
					$.ajax({
						url: "/homed-orders/delete-wrap",
						method: "POST",
						data: {
							item:val,
							addi:1
							},
						dataType: "text",
						success: function(data){
							console.log(data);
						}
					});
				}
			}
			else{
				$.ajaxSetup({ 
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
				$.ajax({
					url: "/homed-orders/delete-wrap",
					method: "POST",
					data: {
						item:val,
						addi:0
						},
					dataType: "text",
					success: function(data){
						console.log(data);
					}
				});
				
			}
		}
	});
});
</script>
@endpush



