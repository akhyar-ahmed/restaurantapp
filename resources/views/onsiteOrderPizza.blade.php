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
                                        <label><input type="radio" name="optradio" value="1">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="2">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="3">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="4">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="a"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="a"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Free Choice</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="5">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="6">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="7">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="8">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="b"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="b"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Hawaiian Pizza</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="9">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="10">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="11">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="12">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="c"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="c"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                        <label><input type="radio" name="optradio" value="13">7" small</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="14">9" Medium</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="15">12" Large</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="15">15" Super</label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">deep pan</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="d"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="d"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            
				<div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">American Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="17">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="18">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="19">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="20">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="e"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="e"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">BBQ Feast</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="21">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="22">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="23">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="24">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" vaue="f"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="f"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="25">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="26">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="27">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="28">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="g"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="g"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                    <div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Supreme</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="29">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="30">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="31">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="32">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="h"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="h"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Vegetarian Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="33">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="34">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="35">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="36">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="i"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="i"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="37">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="38">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="39">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="40">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="j"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="k"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Vegetarian Sweet</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="41">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="42">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="43">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="44">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="k"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" va;ue="k"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Meat Lovers</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="45">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="46">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="47">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="48">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="l"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="l"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="49">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="50">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="51">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio"value="52">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="m"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="m"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Pepperoni Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="53">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="54">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="55">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="56">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="n"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" va;ue="n"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Seafood Pizza</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="57">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="58">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="59">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="60">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="o"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="o"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="61">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="62">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="63">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="64">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="p"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="p"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
               
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Spinach lovers</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="65">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="66">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="67">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="68">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="q"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="q"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Arian Continental</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="69">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="70">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="71">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="72">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="r"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="r"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="73">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="74">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="75">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="76">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="s"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="s"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">NewYork Style</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="77">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="78">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="79">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="80">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="t"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger"id="minus" value="t"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
                

                <div class="col-xs-4">
                    
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Hot</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="81">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="82">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="83">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="84">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="u"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="u"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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
                                    <label><input type="radio" name="optradio" value="85">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="86">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="87">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="88">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="v"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="v"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Chicken Donner</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="89">7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="90">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="91">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="92">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="w"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" vaue="w"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
						<img class="card-img-top" src="..." alt="">
						<div class="card-block">
							<h4 class="card-title">Lamb Donner</h4>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="93"> 7" small</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="94">9" Medium</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="95">12" Large</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="96">15" Super</label>
                                </div>
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">deep pan</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="x"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="x"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
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

