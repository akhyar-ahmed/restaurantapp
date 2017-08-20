<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\Salerecords;
use App\Model\TawayItems;
use App\Model\TawayOrders;
use App\Model\TawayOrderManipulations;
use Session;


class TawayOrderController extends Controller
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

                return view('tawayOrders');
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
    public function preview()
    {
        //return "FUCK OFF BITCHES !!";
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {
                $orderItem = Salerecords::where('user_id','=',$user_id)->get();
                //return $orderItem;

                return view('tAwayPreview')
                    ->with(compact('orderItem'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function confirmOrder(Request $request){
       
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        else{
            return redirect()->route('logout');        
        }
       
        $orderItems = Salerecords::where('user_id', '=', $id)->get();
       // return $orderItems;
        $total_item;
        $grand_total=0;
       
        foreach($orderItems as $indx=>$order){
            $total_item=$indx;
            $grand_total+=$order->total;

        }
       
        $total_item++;
        //return $grand_total;
       
        $tawayOrder = new TawayOrders;
        $tawayOrder->user_id = $id;
        $tawayOrder->total_item = $total_item; 
        $tawayOrder->grand_total = $grand_total;
        $tawayOrder->is_paid = 0;
        
        $tawayOrder->save();
        foreach($orderItems as $indx=>$order){
            $tawayMani = new TawayOrderManipulations;

            $tawayMani->order_id = $tawayOrder->id;
            $tawayMani->food_name = $order->food_name;
            $tawayMani->quantity = $order->quantity;
            $tawayMani->base_price = $order->base_price;
            $tawayMani->net_total = $order->total; 
            $tawayMani->save();
            $order->delete();
        }
       
        Session::flash('success', ' Take-Away Order Enrolled Successfully !!');
       
        return $this->index();

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
