<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\TawayItems;
use Sesssion;

class TakeAwayItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

/*                 $freshJuice = TawayItems::where('category', '=', "Fresh Juice")->get();
                $tea = TawayItems::where('category', '=', "Tea")->get();
                $coffie = TawayItems::where('category', '=', "Coffie")->get();
                $milkshake = TawayItems::where('category', '=', "Milkshake")->get();
                $softDrinks = TawayItems::where('category', '=', "Soft Drinks")->get();
                $diserts = TawayItems::where('category', '=', "Diserts")->get();
                $sides = TawayItems::where('category', '=', "Sides")->get();
                $pizza = TawayItems::where('category', '=', "Pizza")->get();
                $curry = TawayItems::where('category', '=', "Curry")->get();
                $shawarma = TawayItems::where('category', '=', "Shawarma")->get();
                $wrap = TawayItems::where('category', '=', "Wrap")->get();
                $burgers = TawayItems::where('category', '=', "Burgers")->get();
                $grilled = TawayItems::where('category', '=', "Grilled")->get();
                $salad = TawayItems::where('category', '=', "Salad")->get();
                $coldmezze = TawayItems::where('category', '=', "Cold mezze")->get();
                $specialdeals = TawayItems::where('category', '=', "Special meals")->get(); */

                //return $items;
                return view('tawayOrders');
                /* return view('tawayOrders')
                    ->with(compact('freshJuice'))
                    ->with(compact('tea'))
                    ->with(compact('coffie'))
                    ->with(compact('milkshake'))
                    ->with(compact('softDrinks'))
                    ->with(compact('diserts'))
                    ->with(compact('sides'))
                    ->with(compact('pizza'))
                    ->with(compact('curry'))
                    ->with(compact('shawarma'))
                    ->with(compact('wrap'))
                    ->with(compact('burgers'))
                    ->with(compact('grilled'))
                    ->with(compact('salad'))
                    ->with(compact('coldmezze'))
                    ->with(compact('specialdeals')); */
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        } 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function drinks(){
        return redirect()->route('taway-orders');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function desert(){
        return view('tawayorderIceCreamDessert');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sides(){
        return view('tawayOrderSides');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pizza(){
        return view('tawayOrderPizza');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function curry(){
        return view('tawayOrderCurry');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shawarma(){
        return view('tawayOrderShawarma');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wrap(){
        return view('tawayOrderWrap');
    }   
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function burgers(){
        return view('tawayOrderburgers');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grilled(){
        return view('tawayOrderGrilled');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salads(){
        return view('tawayOrderSaladsMezze');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spdeals(){
        return view('tawayOrderSpecialDeals');
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

