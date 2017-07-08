@extends('item_main')

@section('title', '| Dashboard')

@section('content')
<!--akhyar -->
<div class="container">
    <div class="row" id="app">
        <div class="col-md-12">
            <div class="panel panel-default" style = "background-color:transparent;">
                <div class="panel-heading">{{__('Dashboard')}}</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <h2>Today's Stats:</h2>
                            <hr>
                             <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 38 </strong></h2>
                                    <p>Onsite Orders </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 30 </strong></h2>
                                    <p>Take-Away Orders</p> 
                                 </div>                         
                            </div> 
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 27 </strong></h2>
                                    <p>Home Delivery</p>
                                </div>                           
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
     <div class="row" id="app">
        <div class="col-md-12">
            <div class="panel panel-default" style = "background-color:transparent;">
                <div class="panel-heading">{{__('Dashboard')}} </div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <h2>Recent Onsite Order's:</h2>
                            <hr>
                            <router-view name="default"></router-view>
                             <div class="col-sm-4">
                            
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 38 </strong></h2>
                                    <p>Onsite Orders </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 30 </strong></h2>
                                    <p>Take-Away Orders</p> 
                                 </div>                         
                            </div> 
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 27 </strong></h2>
                                    <p>Home Delivery</p>
                                </div>                           
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
     <div class="row" id="app">
        <div class="col-md-12">
            <div class="panel panel-default" style = "background-color:transparent;">
                <div class="panel-heading">{{__('Dashboard')}} </div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <h2>Recent Take-Away Order's:</h2>
                            <hr>
                            <router-view name="default"></router-view>
                             <div class="col-sm-4">
                            
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 38 </strong></h2>
                                    <p>Onsite Orders </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 30 </strong></h2>
                                    <p>Take-Away Orders</p> 
                                 </div>                         
                            </div> 
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 27 </strong></h2>
                                    <p>Home Delivery</p>
                                </div>                           
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
     <div class="row" id="app">
        <div class="col-md-12">
            <div class="panel panel-default" style = "background-color:transparent;">
                <div class="panel-heading">{{__('Dashboard')}} </div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <h2>Recent Online Order's:</h2>
                            <hr>
                            <router-view name="default"></router-view>
                             <div class="col-sm-4">
                            
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 38 </strong></h2>
                                    <p>Onsite Orders </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 30 </strong></h2>
                                    <p>Take-Away Orders</p> 
                                 </div>                         
                            </div> 
                            <div class="col-sm-4">
                                <div class="border" style="border: 1px solid ; text-align: center;">
                                    <h2><strong> 27 </strong></h2>
                                    <p>Home Delivery</p>
                                </div>                           
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection