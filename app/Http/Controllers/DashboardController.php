<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orders;
use App\Model\OnlineOrders;
use Auth;
use App\User;
use App\Model\Customers;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onsiteOrders = $this->getNoOfOnsiteOrders();
        $takeAwayOrders = $this->getNoOfTakeAwayOrders();
        $homeDeliveryOrders = $this->getNoOfHomeDeliveryOrders();
        $takeAwayName = [];
        $takeAwayCusName = [];
        $onsiteWaiterName = [];
        $homeDeliveryName = [];
        $homeDeliveryCusName = [] ;
        


        foreach($onsiteOrders as $orders => $ind)
            $onsiteWaiterName[$orders] = User::find($ind->user_id);

        foreach($takeAwayOrders as $ind => $orders)
        {
            //return $takeAwayName = $orders;
            $takeAwayName[$ind] = User::find($orders->user_id);
            $takeAwayCusName[$ind] = Customers::find($orders->customer_id);        
        }
        //return $takeAwayCusName;

        foreach($homeDeliveryOrders as $ind => $orders)
        {
            //return $takeAwayName = $orders;
            $homeDeliveryName[$ind] = User::find($orders->user_id);
            $homeDeliveryCusName[$ind] = Customers::find($orders->customer_id);        
        }


        //return $homeDeliveryCusName;

        return view('dashboard')->with(compact('onsiteOrders', 'takeAwayOrders', 'homeDeliveryOrders', 'onsiteWaiterName', 'takeAwayName', 'takeAwayCusName', 'homeDeliveryName', 'homeDeliveryCusName'));
    }

    /**
     * Show the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNoOfOnsiteOrders()
     {
         $orders = Orders::where('is_paid', '=', '0')->get();
         return $orders;
     }


    /**
     * Show the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNoOfTakeAwayOrders()
     {
         $orders = OnlineOrders::where([
                ['is_paid', '=', '0'],
                ['category_id', '=', '2']
            ])->get();
         return $orders;
     }



    /**
     * Show the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNoOfHomeDeliveryOrders()
     {
         $orders = OnlineOrders::where([
                ['is_paid', '=', '0'],
                ['category_id', '=', '1']
            ])->get();
         return $orders;
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
