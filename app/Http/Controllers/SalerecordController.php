<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Salerecords;
use App\Http\Requests\SalerecordRequest;
use Auth;
Use App\User;
Use App\Model\Items;
use Session;
use Illuminate\Contracts\Validation\Validator;

class SalerecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ["C-01","C-03","C-08","C-10","C-11","C-12","C-13","C-17","C-19","C-37"];
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $table[6];
        $orderItem = Salerecords::where('user_id', '=', $id)->get();
        return view('order_place')
            ->with(compact('table', 'id', 'orderItem'));
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
    public function postCreateSale(SalerecordRequest $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }

        $item = Items::find($request->id);
        $item->stock -=$request->quantity;
        $orderItem = Salerecords::where([
                                        ['user_id', '=', $id],
                                        ['item_id', '=', $request->id]
                                        ])->get();
        //return $orderItem;
        if(count($orderItem)>0)
        {
            Session::flash('danger', 'This Item was already Enrolled !');
            return redirect()->route('place.item');
        }
        //return $item->stock;
        if($item->stock < 0){
            Session::flash('danger', 'Item quantity is out of stock!');
            return redirect()->route('place.item');
        }
        else{
            $item->save();
            $newItem = new Salerecords;
            $user_id = $request->user()->id;
            $newItem->user_id = $user_id;
            $newItem->item_id = $request->id;
            $newItem->food_name = $request->name;
            $newItem->food_stock = $item->stock;
            $newItem->base_price = $request->base_price;
            $newItem->food_code = $request->code;
            $newItem->quantity = $request->quantity;
            //$quantity = floatval($request->quantity);
            $total = ($request->base_price) * ($request->quantity);
            $newItem->total = $total;
            
            $newItem->save();
            Session::flash('success', 'Item Enrolled Successfully');
            return redirect()->route('place.item');
        }
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
    public function getDeleteItem($id)
    {
        $order = Salerecords::find($id);
        //return $order->item_id;
        $item = Items::find($order->item_id);
        //return $item->stock;
        $item->stock += $order->quantity;
        $item->save();
        $order->delete();
        Session:: flash('danger', 'Item Cancelled Successfully !');

        return redirect()->route('place.item');
    }
    /**
     * Clear the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDeleteUserOrder(Request $request){
        return "hello";
    }
}
