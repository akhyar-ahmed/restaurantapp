<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Salerecords;
use App\Http\Requests\SalerecordRequest;
use Auth;
Use App\User;
Use App\Model\Items;
use Session;
use App\Model\Customers;
use Illuminate\Contracts\Validation\Validator;
use App\Model\TawayItems;

class OnlineSalerecordController extends Controller
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
            $table = ["C-01","C-03","C-08","C-10","C-11","C-12","C-13","C-17","C-19","C-37"];
            $id = Auth::user()->getId();
            $admin = User::find($id);

            $searchCustomer = new Customers;
            $orderItem = Salerecords::where('user_id', '=', $id)->get();
            
            if($admin->type == 1) {
                return view('online_order_place')
                    ->with(compact('id', 'orderItem', 'searchCustomer'));
            }
            else if($admin->type == 0 ){
                 return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }
        //return $table[6];
       
        //return $orderItem;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addDrinks(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = TawayItems::where('category', '=', "Fresh Juice")
                           ->orWhere('category', '=', "Tea")
                           ->orWhere('category', '=', "Coffie")
                           ->orWhere('category', '=', "Milkshake")
                           ->orWhere('category', '=', "Soft Drinks")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                $orderItem = Salerecords::where([
                                                ['user_id','=', $id],
                                                ['food_name','=',$value['name']]
                ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity +=1;
                    $item->total = $item->quantity * $item->base_price;

                    $item->save();
                    return 'success'; 
                } else {
                    $newItem = new Salerecords;
                    $newItem->user_id = $id;
                    $newItem->item_id = $value['id'];
                    $newItem->food_name = $value['name'];
                    $newItem->base_price = $value['base_price'];
                    $newItem->food_code = $value['category'];
                    $newItem->quantity = 1;
                    $total = ($value['base_price']);
                    $newItem->total = $total;
                    
                    $newItem->save();
                    return 'success';
                }

            }
        }
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateSale(SalerecordRequest $request)
    {
        //return "hello";
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
            Session::flash('danger', 'This Item was Already Enrolled !!');
            return redirect()->route('online.order');
        }
        //return $item->stock;
        if($item->stock < 0){
            Session::flash('danger', 'Item Quantity is Out of Stock !!');
            return redirect()->route('online.order');
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
            Session::flash('success', ' Item Enrolled Successfully !!');
            return redirect()->route('online.order');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCustomers($id)
    {
        
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
 
            $orderItem = Salerecords::where('user_id', '=', $user_id)->get();
            $searchCustomer = Customers::find($id);
            
            if($admin->type == 1) {
                return view('online_order_place')
                    ->with(compact('user_id', 'orderItem', 'searchCustomer'));
            }
            else if($admin->type == 0 ){
                 return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }
        //return $table[6];
       
        //return $orderItem;
        // return view('online_order_place')
        //     ->with(compact('user_id', 'orderItem', 'searchCustomer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "hello";
        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
 
            $orderItem = Salerecords::find($id);
            
            if($admin->type == 1) {
                return view('online_order_place_edit')
                    ->with(compact('orderItem'));
            }
            else if($admin->type == 0 ){
                 return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }

       
       // return $orderItem;


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalerecordRequest $request, $id)
    {
        $orderItem = Salerecords::find($id);
        $item = Items::find($orderItem->item_id);
       // return $orderItem;
        $prevQuantity = $orderItem->quantity;
        $updateQuantity = $request->quantity;
        if ($prevQuantity == $updateQuantity) {
            
            Session::flash('success', ' Item Updated Successfully !!');

            return redirect()->route('online.order');

        } else if ( $prevQuantity > $updateQuantity) {

            $quantity = $prevQuantity - $updateQuantity;
            
            $orderItem->food_stock  += $quantity;
            $orderItem->quantity = $updateQuantity;
            $orderItem->total = ($updateQuantity * $orderItem->base_price);

            $item->stock += $quantity;

            $orderItem->save();
            $item->save();     

            Session::flash('success', ' Item Updated Successfully !!');
            
            return redirect()->route('online.order');

        } else if ( $prevQuantity < $updateQuantity ) {
            
            $quantity = $updateQuantity - $prevQuantity;
            
            if ($quantity > $item->stock) {

                Session:: flash('danger', ' Item Quantity is Out of Stock !!');

                return redirect()->route('online.newsaleItem.edit', $orderItem->id);
            }

            $orderItem->food_stock  -= $quantity;
            $orderItem->quantity = $updateQuantity;
            $orderItem->total = ($updateQuantity * $orderItem->base_price);

            $item->stock  -= $quantity;
            
            $orderItem->save();
            $item->save();
            
            Session::flash('success', ' Item Updated Successfully !!');
            
            return redirect()->route('online.order');
        }
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
        Session:: flash('success', ' Item Cancelled Successfully !!');

        return redirect()->route('online.order');
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

        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
        }
        else{
            return redirect()->route('logout');
        }
        
        $order = Salerecords::where('user_id', '=', $user_id)->get();
        
        //return $order;

        foreach($order as $order) {

            $item = Items::find($order->item_id);
            $item->stock += $order->quantity;

            $item->save();
            $order->delete();
        }

        Session::flash('success', ' Order Cancelled Successfully !!');

        return redirect()->route('online.order');
    }
}
