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

			<h3 align="left"><u>Pizza</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="" alt="">
						<div class="card-block">
							<h4 class="card-title">Margherita Pizza</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a href="#" class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Free Choice</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a href="#" class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Hawaiian Pizza</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a href="#" class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            <div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Classic Pizza</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a href="#" class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">American Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">BBQ Feast</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" vaue="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="6"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            <div class="row-xs-12">
                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">BBQ Chicken</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="7"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                    <div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Supreme</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="8"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Vegetarian Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="9"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Vegetarian Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="10"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Vegetarian Sweet</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" va;ue="11"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Meat Lovers</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="12"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="12"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">    
                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Pepperoni Plus</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="13"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="13"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Pepperoni Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" va;ue="14"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Seafood Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="15"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="15"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            <div class="row-sx-12">
                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Arian Special</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="16"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="16"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
               
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Spinach lovers</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="17"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="17"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Arian Continental</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="18"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="18"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            <div class="row-xs-12">
                <div class="col-xs-4">
                	<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Beefeater Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="19"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="19"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">NewYork Style</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="20"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger"id="minus" value="20"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
                

                <div class="col-xs-4">
                    
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="21"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="21"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Maxican Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="22"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="22"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Donner</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="23"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" vaue="23"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Lamb Donner</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio"> 7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a href="#" class="btn btn-success" id="add" value="24"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-danger" id="minus" value="24"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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

