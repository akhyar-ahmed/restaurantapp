@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')

<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:center; display:inline">Place Take-Away Orders</h1>
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

			<h3 align="left"><u>Burgers</u></h3><br/>
			
			<div class="row-xs-12" >
				<div class="col-xs-4">
					<div class="card" >
						<div class="card-block">
							<h4 class="card-title">Chicken Zinger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" name="chips" value="1">Add Chips & Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			
				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Fish Burger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" name="chips" value="2">Add Chips & Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Veg Burger</h4>
                            <div class="checkbox">
                                    <label><input type="checkbox" name="chips" value = "3">Add Chips & Drinks</label>
                            </div>
							<a  class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
							<br><br><br><br>
						</div>
					</div>
				</div>

				
			</div>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Beef Burger</h4>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="radio" value="4">Regular</label>
                                    </div>
                                    <div class="radio-inline">
                                        <label><input type="radio" name="radio" value="5">Large</label>
                                    </div>
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
							<h4 class="card-title">Chicken Fillet</h4>
                                <div class="radio-inline">
                                    <label><input type="radio" name="radio" value="6">Regular</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="radio" value="7">Large</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chips" value = "5">Add Chips & Drinks</label>
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
				if(val != '4' && val != '5'){
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
								url: "/taway-orders/add-burger",
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
							url: "/taway-orders/add-burger",
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
				else{
					if($('input:checkbox[name=chips]:checked').val()){
						if($('input:checkbox[name=chips]:checked').val() != val)
							alert("Please Perfectly Select The Checkbox !!");
						else{
							 var inputVal = $('input:radio[name=radio]:checked').val();
							 if(val == 4 && inputVal && inputVal !=6  && inputVal != 7){
								$.ajaxSetup({ 
									headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
								});
								$.ajax({
									url: "/taway-orders/add-burger",
									method: "POST",
									data: {
										item:inputVal,
										addi:1
										},
									dataType: "text",
									success: function(data){
										console.log(data);
									}
								});
							 }
							 else if( val == 5 && inputVal && inputVal !=4 && inputVal !=5){
								$.ajaxSetup({ 
									headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
								});
								$.ajax({
									url: "/taway-orders/add-burger",
									method: "POST",
									data: {
										item:inputVal,
										addi:1
										},
									dataType: "text",
									success: function(data){
										console.log(data);
									}
								});
							 }
							 else {
								 alert("Select Radio Button Properly !!")
							 }
						}
					}
					else{
						var inputVal = $('input:radio[name=radio]:checked').val();
						if(val == 4 && inputVal && inputVal !=6  && inputVal != 7){
							$.ajaxSetup({ 
								headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
							});
							$.ajax({
								url: "/taway-orders/add-burger",
								method: "POST",
								data: {
									item:inputVal,
									addi:0
									},
								dataType: "text",
								success: function(data){
									console.log(data);
								}
							});
						}
						else if( val == 5 && inputVal && inputVal !=4 && inputVal !=5){
							$.ajaxSetup({ 
								headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
							});
							$.ajax({
								url: "/taway-orders/add-burger",
								method: "POST",
								data: {
									item:inputVal,
									addi:0
									},
								dataType: "text",
								success: function(data){
									console.log(data);
								}
							});
						}
						else {
								alert("Select Radio Button Properly !!")
						}
					}
				}
			}
			else if( id == "minus"){
				if(val != '4' && val != '5'){
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
								url: "/taway-orders/delete-burger",
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
							url: "/taway-orders/delete-burger",
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
				else{
					if($('input:checkbox[name=chips]:checked').val()){
						if($('input:checkbox[name=chips]:checked').val() != val)
							alert("Please Perfectly Select The Checkbox !!");
						else{
							 var inputVal = $('input:radio[name=radio]:checked').val();
							 if(val == 4 && inputVal && inputVal !=6  && inputVal != 7){
								$.ajaxSetup({ 
									headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
								});
								$.ajax({
									url: "/taway-orders/delete-burger",
									method: "POST",
									data: {
										item:inputVal,
										addi:1
										},
									dataType: "text",
									success: function(data){
										console.log(data);
									}
								});
							 }
							 else if( val == 5 && inputVal && inputVal !=4 && inputVal !=5){
								$.ajaxSetup({ 
									headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
								});
								$.ajax({
									url: "/taway-orders/delete-burger",
									method: "POST",
									data: {
										item:inputVal,
										addi:1
										},
									dataType: "text",
									success: function(data){
										console.log(data);
									}
								});
							 }
							 else {
								 alert("Select Radio Button Properly !!")
							 }
						}
					}
					else{
						var inputVal = $('input:radio[name=radio]:checked').val();
						if(val == 4 && inputVal && inputVal !=6  && inputVal != 7){
							$.ajaxSetup({ 
								headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
							});
							$.ajax({
								url: "/taway-orders/delete-burger",
								method: "POST",
								data: {
									item:inputVal,
									addi:0
									},
								dataType: "text",
								success: function(data){
									console.log(data);
								}
							});
						}
						else if( val == 5 && inputVal && inputVal !=4 && inputVal !=5){
							$.ajaxSetup({ 
								headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
							});
							$.ajax({
								url: "/taway-orders/delete-burger",
								method: "POST",
								data: {
									item:inputVal,
									addi:0
									},
								dataType: "text",
								success: function(data){
									console.log(data);
								}
							});
						}
						else {
								alert("Select Radio Button Properly !!")
						}
					}
				}
			}
		});
	});
</script>
@endpush

