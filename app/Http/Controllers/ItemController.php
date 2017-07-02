<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Items;
use App\Http\Requests\ItemRequest;
use Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::get();
        return view('item_view')
            ->with(compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(ItemRequest $request)
    {
        $itemName = ucfirst(strtolower($request->name));
        $itemStock = $request->stock;
        $itemCode = $request->code;
        $itemBasePrice = $request->base_price;
        $item = new Items;
        $item_name = $item->where(['name'=>$itemName, 'code'=>$request->code])->first();
        if($item_name) {
            $item_name->stock += $request->stock;
            $item_name->base_price = $request->base_price;
            $item_name->save();
        } else {
            $item->name = $itemName;
            $item->stock = $request->stock;
            $item->code = $request->code;
            $item->base_price = $request->base_price;
            $item->save();
        }
        
        Session:: flash('success', 'Food Item Stored Successfully!');
        
        return redirect()->route('item');

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
    public function getEdit($id)
    {
        $item = Items::find($id);
        return view('item_edit')
            ->with(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEdit(ItemRequest $request, $id)
    {
        $item = Items::find($id);
        $item->name = $request->name;
        $item->code = $request->code;
        $item->stock = $request->stock;
        $item->base_price = $request->base_price;

        $item->save();
        
        Session:: flash('success', 'Food Item Updated Successfully !');

        return redirect()->route('item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = Items::find($id);
        $item->delete();

        Session:: flash('danger', 'Food Item Deleted Successfully !');

        return redirect()->route('item');
    }
}
