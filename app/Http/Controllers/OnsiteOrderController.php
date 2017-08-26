<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\Salerecords;
use App\Model\TawayItems;
use App\Model\OnsiteOrders;
use App\Model\OnsiteOrderManipulations;
use Session;
use App\Model\Customers;
use Illuminate\Contracts\Validation\Validator;


class OnsiteOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

                return view('onsitePreview')
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
     * Delete the whole resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUserOrder()
    {
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {
                //$orderItem = Salerecords::where('user_id','=',$user_id)->get();
                //return $orderItem;

                $order = Salerecords::where('user_id', '=', $user_id)->get();
        
                //return $order;

                foreach($order as $order) {

                    $order->delete();
                }

                Session::flash('success', ' Order Cancelled Successfully !!');

                return redirect()->route('onsite-orders');
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
       return "hello";
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
       
        $onsiteOrder = new OnsiteOrders;
        $onsiteOrder->user_id = $id;
        $onsiteOrder->total_item = $total_item;
        $onsiteOrder->table_no = $request->table_no; 
        $onsiteOrder->grand_total = $grand_total;
        $onsiteOrder->is_paid = 0;
        
        $onsiteOrder->save();
        foreach($orderItems as $indx=>$order){
            $onsiteMani = new OnsiteOrderManipulations;

            $onsiteMani->order_id = $tawayOrder->id;
            $onsiteMani->food_name = $order->food_name;
            $onsiteMani->quantity = $order->quantity;
            $onsiteMani->base_price = $order->base_price;
            $onsiteMani->net_total = $order->total; 
            $onsiteMani->save();
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
