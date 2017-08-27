<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CusNames;
use App\Model\Customers;
use Auth;
use App\User;
use Session;
use Illuminate\Contracts\Validation\Validator;

class CusNameController extends Controller
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
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            
            if($admin->type == 1) {
                return view('homedOrderIceCreamDessert');
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
    public function addHomedCustomers($id)
    {
        $user_id = Auth::user()->getId();
        $cus = new CusNames;
        $cus->cus_id = $id;
        $cus->user_id = $user_id;
        $cus->save();
        Session:: flash('success', ' Customer Added Successfully !!');
        return redirect()->back();

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
