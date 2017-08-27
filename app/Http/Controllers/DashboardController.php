<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orders;
use App\Model\OnlineOrders;
use App\Model\TawayOrders;
use Auth;
use App\User;
use App\Model\Customers;
use App\Model\OnsiteOrders;

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
        
        //return $onsiteOrders;

        foreach($takeAwayOrders as $ind => $orders)
        {
            //return $takeAwayName = $orders;
            $takeAwayName[$ind] = User::find($orders->user_id);       
        }
        //return $takeAwayOrders;

        foreach($homeDeliveryOrders as $ind => $orders)
        {
            //return $takeAwayName = $orders;
            $homeDeliveryName[$ind] = User::find($orders->user_id);
            $homeDeliveryCusName[$ind] = Customers::find($orders->customer_id);        
        }


        //return $homeDeliveryCusName;
        if(Auth::check())
         {
            $admin = User::find(Auth::user()->getId());
            
            if($admin->type == 1)
                return view('dashboard')->with(compact('onsiteOrders', 'takeAwayOrders', 'homeDeliveryOrders', 'onsiteWaiterName', 'takeAwayName', 'homeDeliveryName', 'homeDeliveryCusName'));
            else if($admin->type ==0 )
                return redirect()->route('place.item');
         } else {
             return redirect()->route('logout');
         }
    }

    /**
     * Show the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNoOfOnsiteOrders()
     {
         $orders = OnsiteOrders::where('is_paid', '=', '0')->get();
         return $orders;
     }


    /**
     * Show the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNoOfTakeAwayOrders()
     {
         $orders = TawayOrders::where('is_paid', '=', '0')->get();
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
