@extends('main')

@section('title', "| TakeAway-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
    <div class = "col-xs-10">
        <h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place Take-Away Orders)</h3>
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

			<h3 align="left"><u>Pizza</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-4">
					<div class="card">
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
                                    __________________
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            
                        </div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
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
                                    __________________
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            
                        </div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card" >
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
                                    __________________
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
                <hr>
            </div>
            
            <div class="row-xs-12">
				<div class="col-xs-4">
					<div class="card">
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
                                    __________________
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                    </div>
							<a  class="btn btn-success" id="add" value="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="4"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
            
				<div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="5"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" vaue="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="6"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            <div class="row-xs-12">
                <div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="7"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                    <div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="8"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="9"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="10"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" va;ue="11"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="12"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="12"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">    
                <div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="13"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="13"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" va;ue="14"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="15"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="15"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            <div class="row-sx-12">
                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="16"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="16"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
               
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="17"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="17"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="18"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="18"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            <div class="row-xs-12">
                <div class="col-xs-4">
                	<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="19"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="19"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="20"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger"id="minus" value="20"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
                

                <div class="col-xs-4">
                    
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="21"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="21"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
                        </div>
					</div>
				</div>
            </div>
            
            <div class="row-xs-12">

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="22"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="22"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="23"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" vaue="23"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

                <div class="col-xs-4">
                
					<div class="card">
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
                                __________________
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="deep">deep pan</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio"  name="radio1" value="thin">thin crust</label>
                                </div>
							<a  class="btn btn-success" id="add" value="24"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a  class="btn btn-danger" id="minus" value="24"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <br><br><br><br>
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
                var inputVal = $('input:radio[name=optradio]:checked').val();
                var  compval = $('input:radio[name=radio1]:checked').val();
                var radioval=val*4;
                if((radioval != inputVal)&&(radioval != inputVal-1) && (radioval != inputVal-2) && (radioval != inputVal-3) && (compval!="deep") && (compval!="thin") )
                    alert("Select Radio Button Properly");
                else {
                
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "/homed-orders/add-pizza",
                        method: "POST",
                        data: {
                            val:inputVal,
                            comp:compval
                            },
                        dataType: "text",
                        success: function(data){
                            console.log(data);
                        }
                    });
                }
                    //alert(inputVal + " "+ compval);
				

			}
			else if( id == "minus"){
				//alert(id+" "+val);
                var inputVal = $('input:radio[name=optradio]:checked').val();
                var  compval = $('input:radio[name=radio1]:checked').val();
                var radioval=val*4;
                if((radioval != inputVal)&&(radioval != inputVal-1) && (radioval != inputVal-2) && (radioval != inputVal-3) && (compval!="deep") && (compval!="thin") )
                    alert("Select Radio Button Properly");
                else {
                
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "/homed-orders/delete-pizza",
                        method: "POST",
                        data: {
                            val:inputVal,
                            comp:compval
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

