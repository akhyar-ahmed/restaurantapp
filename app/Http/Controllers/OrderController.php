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
        $table = ["C-01","C-03","C-08","C-10","C-11","C-12","C-13","C-17","C-19","C-37"];
        //return $table[6];
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        $orderItem = Salerecords::where('user_id', '=', $id)->get();
        return view('order_place')
            ->with(compact('table','orderItem','id'));
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
        $table_id = "";
        $table_id = $request->table_id;

        $category_id = $request->category_id; 

        $order = new Orders;
        $order->user_id = $user_id;

        if ($category_id == 1 && $table_id != "") {
            
            $order->table_id = $table_id;

        } else if ( $category_id == 1 && $table_id == "" ) {

            Session:: flash('danger', ' Table ID Field Requird !!');

            return redirect()->back();
        }
        else {
         
            $order->table_id = "";
        }
        //return $items;

        $order->category_id = $category_id;
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
                $orderManipulation->is_paid  = '0';

                $orderManipulation->save();

                $itm->delete();
            }
        }

        if($category_id == 1)
            Session::flash('success', ' Onsite Order Enrolled Successfully !!');
        else if($category_id == 2)
            Session::flash('success', ' Take Away Order Enrolled Successfully !!');
        else if($category_id == 3)
            Session::flash('success', ' Online Order Enrolled Successfully !!');
            
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
