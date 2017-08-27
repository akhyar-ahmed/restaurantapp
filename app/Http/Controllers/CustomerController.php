<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Model\Customers;
use Auth;
use Session;
use App\User;

class CustomerController extends Controller
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

            $customers = Customers::all();
            
            if($admin->type == 1) {
                return view('customer_view')
                    ->with(compact('customers'));
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
    public function getCreate()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            $customers = Customers::all();
            
            if($admin->type == 1) {
                return view('create_customer');
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(CustomerRequest $request)
    {
        //return "hello";
        $checkCaller = Customers::where('phone','=', $request->caller_id)->get();
        if(count($checkCaller)>0){
            Session:: flash('danger', ' Customer are already in the list !!');
            return redirect()->back();
        }
        $customer = new Customers;
        $customerName = ucfirst(strtolower($request->first_name)); 
        $customer->first_name = $customerName;
        $customer->last_name = strtolower($request->last_name);
        $customer->phone = $request->caller_id;
        $customer->address_one = $request->address_one;
        $customer->address_two = $request->address_two;
        $customer->zip = $request->zip;

        $customer->save();

        Session:: flash('success', ' Customer Enrolled Successfully !!');

        return redirect()->route('customer');
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
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            $customer = Customers::find($id);
            
            if($admin->type == 1) {
                return view('customer_edit')
                    ->with(compact('customer'));
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $item = Customers::find($id);
        $itemName = ucfirst(strtolower($request->first_name));
        $item->first_name = $itemName;
        $item->last_name = strtolower($request->last_name);
        $item->phone = $request->caller_id;
        $item->address_one = $request->address_one;
        $item->address_two = $request->address_two;
        $item->zip = $request->zip;

        $item->save();
        
        Session:: flash('success', ' Customer Updated Successfully !!');

        return redirect()->route('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customers::find($id);
        $customer->delete();

        Session:: flash('success', ' Customer Deleted Successfully !!');

        return redirect()->route('customer');
    }
}
