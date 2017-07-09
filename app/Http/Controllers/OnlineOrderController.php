<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Model\Items;
Use App\User;
use Illuminate\Contracts\Validation\Validator;
use App\Model\Salerecords;
use App\Model\OnlineOrders;
use App\Model\Customers;
use App\Model\OnlineOrderManipulations;
use App\Http\Requests\OnlineOrderRequest;

class OnlineOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }

       return "hello";

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
    public function postOrderCreate(OnlineOrderRequest $request)
    {   // return $request;
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
        }
        
        $items = Salerecords::where('user_id', '=', $user_id)->get();
        //return $items;
        $customer = Customers::where('phone', '=',$request->caller_id)->get();
        
        foreach($customer as $customer)
            $customer_id = $customer->id;        

        $category_id = $request->category_id; 

        $order = new OnlineOrders;
        $order->user_id = $user_id;
        $order->customer_id = $customer_id;

        $order->category_id = $category_id;
        $order->total_item = count($items);
        $order->is_paid = '0';
        //return $order;
        $order->save();
        //return $order->id;
        if(! is_null($items)) {

            foreach ( $items as $itm ) {

                $orderManipulation = new OnlineOrderManipulations;

                $orderManipulation->online_order_id = $order->id;
                $orderManipulation->item_id = $itm->item_id;
                $orderManipulation->item_name = $itm->food_name;
                $orderManipulation->quantity = $itm->quantity;
                $orderManipulation->net_total = $itm->total;

                $orderManipulation->save();

                $itm->delete();
            }
        }
        
        Session::flash('success', ' Onsite Order Enrolled Successfully !!');
            
        return redirect()->route('online.order');
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            $orderItem = Salerecords::where('user_id', '=', $user_id)->get();
            
            if($admin->type == 1) {
                return view('online_order_place')
                    ->with(compact('table', 'id', 'orderItem'));
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        } 
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
