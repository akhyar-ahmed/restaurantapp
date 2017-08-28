<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Salerecords;
use App\Http\Requests\SalerecordRequest;
use Auth;
Use App\User;
Use App\Model\HomedItems;
use Session;
use Illuminate\Contracts\Validation\Validator;

class SalerecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ["C-01","C-03","C-08","C-10","C-11","C-12","C-13","C-17","C-19","C-37"];
        if (Auth::check())
        {
            $id = Auth::user()->getId();
            $admin = User::find($id);

            $orderItem = Salerecords::where('user_id', '=', $id)->get();
            
            if($admin->type == 1) {
                return view('order_place')
                    ->with(compact('table', 'id', 'orderItem'));
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
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addCake(Request $request)
    {
        //return $request->topping;
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        if($request->item=='A')
            $request->item = 1;
        else if($request->item=='B')
            $request->item = 2;

        //return $request->item;
        $item = HomedItems::where('category', '=', "Desserts")
                           ->orWhere('category', '=', "Ice creams")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->item == 1 || $request->item == 2)
                    $orderItem = Salerecords::where([
                                                ['user_id','=', $id],
                                                ['food_name','=',$request->topping]
                    ])->get();
                else
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
    
                    if($request->item == 1 || $request->item == 2)
                        $newItem->food_name = $request->topping;
                    else
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addCurry(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Curry")->get();
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addGrill(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Grilled")->get();
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addShawarma(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Shawarma")->get();
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addSides(Request $request)
    {
        //return $request->qua;
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Sides")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->item != 15)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$request->topping]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    if($request->item != 15 )
                        $item->quantity +=1;
                    else
                        $item->quantity += $request->qua;
                        
                    $item->total = $item->quantity * $item->base_price;

                    $item->save();
                    return 'success'; 
                } else {
                    $newItem = new Salerecords;
                    $newItem->user_id = $id;
                    $newItem->item_id = $value['id'];
                    if($request->item != 15)
                        {
                            $newItem->food_name = $value['name'];
                            $newItem->quantity = 1;
                            
                        }
                    else
                        {
                            $newItem->food_name = $request->topping;
                            $newItem->quantity = $request->qua;
                        }
                    $newItem->base_price = $value['base_price'];
                    $newItem->food_code = $value['category'];
                    
                    $total = ($value['base_price']);
                    $newItem->total = $total;
                    
                    $newItem->save();
                    return 'success';
                }

            }
        }
    
        
    }

    /**
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addWrap(Request $request)
    {
        //return $request->qua;
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Wrap")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->addi != 1)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']." with chips & drinks"]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }

                    $item->quantity +=1;
                    $item->total = $item->quantity * $item->base_price;

                    $item->save();

                    return 'success'; 

                } else {
                    $newItem = new Salerecords;
                    $newItem->user_id = $id;
                    $newItem->item_id = $value['id'];
                    if($request->addi != 1)
                        {
                            $newItem->food_name = $value['name'];
                            $newItem->base_price = $value['base_price'];
                            
                        }
                    else
                        {
                            $newItem->food_name = $value['name']." with chips & drinks";
                            $newItem->base_price = ($value['base_price'] + 2.00);
                        }
                    $newItem->quantity = 1;
                    
                    $newItem->food_code = $value['category'];
                    
                    $total = $newItem->base_price;
                    $newItem->total = $total;
                    
                    $newItem->save();
                    return 'success';
                }

            }
        }
    }

    /**
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addBurger(Request $request)
    {
        //return $request->qua;
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Burgers")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->addi != 1)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']." with chips & drinks"]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }

                    $item->quantity +=1;
                    $item->total = $item->quantity * $item->base_price;

                    $item->save();

                    return 'success'; 

                } else {
                    $newItem = new Salerecords;
                    $newItem->user_id = $id;
                    $newItem->item_id = $value['id'];
                    if($request->addi != 1)
                        {
                            $newItem->food_name = $value['name'];
                            $newItem->base_price = $value['base_price'];
                            
                        }
                    else
                        {
                            $newItem->food_name = $value['name']." with chips & drinks";
                            $newItem->base_price = ($value['base_price'] + 2.00);
                        }
                    $newItem->quantity = 1;
                    
                    $newItem->food_code = $value['category'];
                    
                    $total = $newItem->base_price;
                    $newItem->total = $total;
                    
                    $newItem->save();
                    return 'success';
                }

            }
        }   
    }

    /**
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addSalads(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Salads")
                           ->orWhere('category', '=', "Cold mezze")->get();
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addPizza(Request $request)
    {
       // return $request;
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Pizza")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->val == $key+1) {
                //return $value['name'];
                $name = $value['name']." ".$request->comp;
                $orderItem = Salerecords::where([
                                                ['user_id','=', $id],
                                                ['food_name','=',$name]
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
                    $newItem->food_name = $name;
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
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function addSpdeals(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Special deals")->get();
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
                    $item->total = ($item->quantity * $item->base_price);

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
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteSides(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Sides")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->item != 15)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$request->topping]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteWrap(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Wrap")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->addi != 1)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']." with chips & drinks"]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteBurger(Request $request)
    {
        //return "hello"; 
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Burgers")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->addi != 1)
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']]
                    ])->get();
                else 
                    $orderItem = Salerecords::where([
                                                    ['user_id','=', $id],
                                                    ['food_name','=',$value['name']." with chips & drinks"]
                    ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteCurry(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Curry")->get();
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
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteGrill(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Grilled")->get();
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
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteShawarma(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Shawarma")->get();
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
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
    * Show the form for creating a new resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function deletePizza(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Pizza")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->val == $key+1) {
                //return $value['name'];
                $name = $value['name']." ".$request->comp;
                $orderItem = Salerecords::where([
                                                ['user_id','=', $id],
                                                ['food_name','=',$name]
                ])->get();
                //return count($orderItem);
                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteSalads(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Salads")
                           ->orWhere('category', '=', "Cold mezze")->get();
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
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteCake(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        if($request->item=='A')
            $request->item = 1;
        else if($request->item=='B')
            $request->item = 2;

        //return $request->item;
        $item = HomedItems::where('category', '=', "Desserts")
                           ->orWhere('category', '=', "Ice creams")->get();
        //return count($item);
        foreach($item as $key=>$value){
            if($request->item == $key+1) {
                //return $value['name'];
                if($request->item == 1 || $request->item == 2)
                    $orderItem = Salerecords::where([
                                                ['user_id','=', $id],
                                                ['food_name','=',$request->topping]
                    ])->get();
                else
                    $orderItem = Salerecords::where([
                            ['user_id','=', $id],
                            ['food_name','=',$value['name']]
                    ])->get();

                if(count($orderItem)>0){
                    
                    foreach($orderItem as $order) {
                        $item = Salerecords::find($order['id']);
                        break;
                    }
                    //$item = Salerecords::find($orderItem['id']);
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteSpdeals(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
        }
        //return $request;
        $item = HomedItems::where('category', '=', "Special deals")->get();
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
                    $item->quantity -=1;
                    $item->total = $item->quantity * $item->base_price;
                    
                    if($item->quantity <= 0)
                        $item->delete();
                    else
                        $item->save();
                    return 'success'; 
                } else {
                    return 'success, item not found';
                }

            }
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
    public function postCreateSale(SalerecordRequest $request)
    {
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
            return redirect()->route('place.item');
        }
        //return $item->stock;
        if($item->stock < 0){
            Session::flash('danger', 'Item Quantity is Out of Stock !!');
            return redirect()->route('place.item');
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
            return redirect()->route('place.item');
        }
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
            
            $orderItem = Salerecords::find($id);
            if($admin->type == 1) {
                return view('order_place_edit')
                    ->with(compact('orderItem'));
            }
            else if($admin->type == 0 )
                return view('user_order_place_edit')
                    ->with(compact('orderItem'));
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

            return redirect()->route('place.item');

        } else if ( $prevQuantity > $updateQuantity) {

            $quantity = $prevQuantity - $updateQuantity;
            
            $orderItem->food_stock  += $quantity;
            $orderItem->quantity = $updateQuantity;
            $orderItem->total = ($updateQuantity * $orderItem->base_price);

            $item->stock += $quantity;

            $orderItem->save();
            $item->save();     

            Session::flash('success', ' Item Updated Successfully !!');
            
            return redirect()->route('place.item');

        } else if ( $prevQuantity < $updateQuantity ) {
            
            $quantity = $updateQuantity - $prevQuantity;
            
            if ($quantity > $item->stock) {

                Session:: flash('danger', ' Item Quantity is Out of Stock !!');

                return redirect()->route('newsaleItem.update', $orderItem->id);
            }

            $orderItem->food_stock  -= $quantity;
            $orderItem->quantity = $updateQuantity;
            $orderItem->total = ($updateQuantity * $orderItem->base_price);

            $item->stock  -= $quantity;
            
            $orderItem->save();
            $item->save();
            
            Session::flash('success', ' Item Updated Successfully !!');
            
            return redirect()->route('place.item');
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

        return redirect()->route('place.item');
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
        
        $order = Salerecords::where('user_id', '=', $user_id)->get();
        
        //return $order;

        foreach($order as $order) {

            $item = Items::find($order->item_id);
            $item->stock += $order->quantity;

            $item->save();
            $order->delete();
        }

        Session::flash('success', ' Order Cancelled Successfully !!');

        return redirect()->route('place.item');
    }
}
