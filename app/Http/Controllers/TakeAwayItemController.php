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

                $freshJuice = TawayItems::where('category', '=', "Fresh Juice")->get();
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
                $specialdeals = TawayItems::where('category', '=', "Special meals")->get();
                return view('tawayOrders')
                    ->with(compact());
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
