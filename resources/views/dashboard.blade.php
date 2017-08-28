@extends('item_main')

@section('title', '| Dashboard')

@section('content')
<!--akhyar -->
<div class = "container" >
    <div class = "row">
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading"> {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class = "row" style = "margin-bottom: 30px;" >
                        <div class = "col-xs-12" >
                            <h2> Today's Stats: </h2>
                            <hr>
                            <div class = "col-xs-4" >
                                <div class = "border" style = "border: 1px solid ; text-align: center;" >
                                    <h2> <strong> {{ count($onsiteOrders) }} </strong> </h2>
                                    <p> Onsite Orders </p>
                                </div>
                            </div>
                            <div class = "col-xs-4" >
                                <div class = "border" style = "border: 1px solid ; text-align: center;" >
                                    <h2> <strong> {{ count($takeAwayOrders) }} </strong> </h2>
                                    <p> Take-Away Orders </p> 
                                 </div>                         
                            </div> 
                            <div class = "col-xs-4" >
                                <div class = "border" style = "border: 1px solid ; text-align: center;" >
                                    <h2> <strong> {{ count($homeDeliveryOrders) }} </strong> </h2>
                                    <p> Home Delivery </p>
                                </div>                           
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @if( count($onsiteOrders) )
     <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Onsite Order's: </h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> Order No </th>
                                    <th> User Name </th>
                                    <th> Table No </th>
                                    <th> Items </th>
                                    <th> Total </th>
                                    <th> Time </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($onsiteOrders as $ind => $orders)
                                    <tr id="row">
                                        <td> {{ $ind+1 }} </td>
                                        <td> {{ $onsiteWaiterName[$ind]->name }} </td>
                                        <td> {{ $orders->table_no }} </td>
                                        <td> {{ $orders->total_item }} </td>
                                        <td>£ {{ $orders->grand_total }} </td>
                                        <td> {{ $orders->updated_at }} </td>
                                        <td>
                                            <a href="{{ route('onsite-order-approve', $orders->id) }}" class="btn btn-success btn-xs"> Approve </a>
                                            <a href="{{ route('onsite-destroy', $orders->id) }}" class="btn btn-danger btn-xs"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Onsite Order's: </h2>
                            <hr>
                            <h4> No Available Onsite Orders !! </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br>
    @if( count($takeAwayOrders) )
     <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Take-Away Order's: </h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> Order No </th>
                                    <th> User Name </th>
                                    <th> Items </th>
                                    <th> Total </th>
                                    <th> Time </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($takeAwayOrders as $ind => $orders)
                                    <tr id="row">
                                        <td> {{ $ind+1 }} </td>
                                        <td> {{ $takeAwayName[$ind]->name }} </td>
                                        <td> {{ $orders->total_item }} </td>
                                        <td>£ {{ $orders->grand_total }} </td>
                                        <td> {{ $orders->updated_at }} </td>
                                        <td>
                                            <a href="{{ route('taway-order-approve', $orders->id) }}" class="btn btn-success btn-xs"> Approve </a>
                                            <a href="{{ route('taway-destroy', $orders->id) }}" class="btn btn-danger btn-xs"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Take-Away Order's: </h2>
                            <hr>
                            <h4> No Available Take-Away Orders !! </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br>
    @if( count($homeDeliveryOrders) )
     <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Home Delivery Order's: </h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> Order No </th>
                                    <th> Items </th>
                                    <th> Total </th>
                                    <th> Caller ID </th>
                                    <th> Address </th>
                                    <th> Time </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($homeDeliveryOrders as $ind => $orders)
                                    <tr id="row">
                                        <td>{{ $ind+1 }}</td>
                                        <td>{{ $orders->total_item }}</td>
                                        <td>£{{ $orders->grand_total }}</td>
                                        <td>{{ $homeDeliveryCusName[$ind]->phone }}</td>
                                        <td>{{ $homeDeliveryCusName[$ind]->address_one }}</td>
                                        <td>{{ $orders->created_at }}</td>
                                        <td>
                                            <a href="{{ route('homed-order-approve', $orders->id) }}" class="btn btn-success btn-xs"> Approve </a>
                                            <a href="{{ route('homed-destroy', $orders->id) }}" class="btn btn-danger btn-xs"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class = "row" id = "app" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Dashboard')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2>  Recent Home Delivery Order's: </h2>
                            <hr>
                            <h4> No Available Home Delivery Orders !! </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection