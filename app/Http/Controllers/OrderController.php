<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orders;
use App\User;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderManipulation;
use App\Model\Order_manipulations;
use Auth;
use App\Model\Salerecords;
use Session;
use Illuminate\Contracts\Validation\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $table[6];
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
    public function postOrderCreate(OrderRequest $request)
    {   
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
        }
        
        $items = Salerecords::where('user_id', '=', $user_id)->get();
        //return $items;
        $table_id = $request->table_id;

        $category_id = $request->category_id; 

        $order = new Orders;
        $order->user_id = $user_id;
        $order->table_id = $table_id;

        $order->total_item = count($items);
        $order->is_paid = '0';
        //return $order;
        $order->save();
        //return $order->id;
        if(! is_null($items)) {

            foreach ( $items as $itm ) {

                $orderManipulation = new Order_manipulations;

                $orderManipulation->order_id = $order->id;
                $orderManipulation->item_id = $itm->item_id;
                $orderManipulation->item_name = $itm->food_name;
                $orderManipulation->quantity = $itm->quantity;
                $orderManipulation->net_total = $itm->total;

                $orderManipulation->save();

                $itm->delete();
            }
        }
        
        Session::flash('success', ' Onsite Order Enrolled Successfully !!');
            
        return redirect()->route('place.item');
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
