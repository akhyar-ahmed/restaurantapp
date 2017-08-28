<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Incomes;
use Auth;
use Session;
use App\Model\OnsiteOrders;
use App\Model\TawayOrders;
use App\Model\HomedOrders;
use App\Model\Expenses;
use App\User;

class IncomeController extends Controller
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
            $admin = User::find($id);

            //$orderItem = Salerecords::where('user_id', '=', $id)->get();
            
            if($admin->type == 1) {
                return view('accounts_view');
            }
            else if($admin->type == 0 )
                  return redirect()->route('onsite-orders');
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
