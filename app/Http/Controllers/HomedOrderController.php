<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\CusNames;
use App\User;
use App\Model\Salerecords;
use App\Model\TawayItems;
use App\Model\HomedOrders;
use App\Model\HomedOrderManipulations;
use Session;
use App\Model\Customers;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\HomedOrderRequest;

class HomedOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview()
    {
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {
                $orderItem = Salerecords::where('user_id','=',$user_id)->get();
                //return $orderItem;
                $cus = CusNames::where('user_id', '=', $user_id)->get();
                $customer="";
                $customerFirst="";
                $customerLast="";
                $customerCaller="";
                $customerFinal="";
                foreach($cus as $cus){
                    $customer = Customers::find( $cus->cus_id);
                    
                    break;
                }

                if($customer!=""){
                    $customerFirst = $customer->first_name;
                    $customerLast = $customer->last_name;
                    $customerCaller = $customer->phone;
                    $customerFinal =  $customerFirst." ". $customerLast;
                }
                return view('homedPreview')
                    ->with(compact('orderItem','customerFinal','customerCaller'));
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        } 
    }

/**
     * Delete the whole resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUserOrder()
    {
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {
                //$orderItem = Salerecords::where('user_id','=',$user_id)->get();
                //return $orderItem;

                $order = Salerecords::where('user_id', '=', $user_id)->get();
        
                //return $order;
                $cus = CusNames::where('user_id', '=', $user_id)->get();
                
                foreach($cus as $cus){
                    $cus->delete();
                    //return $customer;
                }

                foreach($order as $order) {

                    $order->delete();
                }

                Session::flash('danger', ' Onsite Order Cancelled Successfully !!!');

                return redirect()->route('homed-orders');
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function confirmOrder(HomedOrderRequest $request){
         //return $request->table_name; 
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        else{
            return redirect()->route('logout');        
        }
       
        $orderItems = Salerecords::where('user_id', '=', $id)->get();
       // return $orderItems;
        $total_item1;
        $grand_total=0;
       
        foreach($orderItems as $indx=>$order){
            $total_item1=$indx;
            $grand_total+=$order->total;

        }
       
        $total_item1++;
        $customer = "";
        $customer = Customers::where('phone','=', $request->customer_caller_ID)->get();

       if(count($customer)<= 0 ){
           
            Session::flash('danger', ' Enroll Customer First !!');
            return redirect()->back();
       }
        $onsiteOrder = new HomedOrders;

        $onsiteOrder->user_id = $id;
        
        foreach($customer as $cus)
        $onsiteOrder->customer_id = $cus->id;

        $onsiteOrder->grand_total = $grand_total;
        $onsiteOrder->total_item = $total_item1;
        $onsiteOrder->is_paid = 0;
        
        $onsiteOrder->save();
        foreach($orderItems as $indx=>$order){
            $onsiteMani = new HomedOrderManipulations;

            $onsiteMani->order_id = $onsiteOrder->id;
            $onsiteMani->food_name = $order->food_name;
            $onsiteMani->quantity = $order->quantity;
            $onsiteMani->base_price = $order->base_price;
            $onsiteMani->net_total = $order->total; 
            $onsiteMani->save();
            $order->delete();
        }
        $cusname = CusNames::where('user_id', '=', $id)->get();
        foreach($cusname as $cusname)
            $cusname->delete();

        Session::flash('success', ' Home Delivery Order Enrolled Successfully !!');
       
        return redirect()->route('homed-orders');

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
        $order = HomedOrders::find($id);
        $order_mani = HomedOrderManipulations::where('order_id','=',$order->id)->get();
        foreach($order_mani as $order_mani)
            $order_mani->delete();
        //return $order_mani;
        $order->delete();
        Session::flash('success', ' Home-Delivery Order Cancelled Successfully !!');
        return redirect()->route('home');
    }
}
