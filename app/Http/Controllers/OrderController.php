<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orders;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderManipulation;
use App\Model\Order_manipulations;
use Auth;
use App\Model\Salerecords;

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
    public function postOrderCreate(Request $request)
    {
        return 'hello';
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
