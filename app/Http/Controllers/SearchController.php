<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Items;
use App\Model\Customers;
use Auth;
use App\User;

class SearchController extends Controller
{
    /**
     * Get Responsive Search for the Food table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchFoodItem(Request $request){
        
        $output = "";
        $value = $request->search;
        $sql1 = Items::where('name', 'LIKE', '%'.$value.'%')
                ->orWhere('code', 'LIKE', '%'.$value.'%')->get();
        if( count($sql1)>0 && $value !=NULL ){
            $output .= '<h3 align = "center"> <u> Search Result </u> </h3>';
            $output .= '<table class = "table table-bordered table-hover">
                            <tr> 
                                <th>SL.</th>
                                <th>Food Name</th>
                                <th>Menu ID</th>
                                <th>Stock</th>
                                <th>Base Price</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>';
            $getEdit='/items/get-edit/';
            $delete='/items/delete/';
            foreach($sql1 as $sql1){
                $create = date('M j, Y', strtotime($sql1['created_at']));
                $update = date('M j, Y', strtotime($sql1['updated_at']));
                $output .= '
                            <tr>
                                <td>'.$sql1['id'].'</td>
                                <td>'.$sql1['name'].'</td>
                                <td>'.$sql1['code'].'</td>
                                <td>'.$sql1['stock'].'</td>
                                <td>'.'£ '.$sql1['base_price'].'</td>
                                <td>'.$create.'</td>
                                <td>'.$update.'</td>
                                <td>
                                    <div>
                                        <form method="GET" action="'.$getEdit. $sql1['id'].'" style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
                                        </form>
                                
                                        <form method="GET" action="'.$delete. $sql1['id'].'" style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
                                        </form>
                                    </div>
	                            </td>
                            </tr>';
            }
            $output .= '</table>';

            // foreach($sql2 as $sql2){
            //     $output .= '
            //                 <tr>
            //                     <td>'.$sql2['id'].'</td>
            //                     <td>'.$sql2['name'].'</td>
            //                     <td>'.$sql2['code'].'</td>
            //                     <td>'.$sql2['stock'].'</td>
            //                     <td>'.$sql2['base_price'].'</td>
            //                     <td>'.$sql2['created_at'].'</td>
            //                     <td>'.$sql2['updated_at'].'</td>
            //                 </tr>';  
            // }
        }
        else if ($value == ''){
            $output.="";
        }
        else{
            $output .= '<h3 align = "center"> <u>Search Result</u> </h3> <h4 align = "center" >Food Item Not Found !!</h4>';
        }

        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            $item = Items::find($id);
            
            if($admin->type == 1) {
                return $output;
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }

        
    }

    /**
     * Get Responsive Search for the Order table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchOrderFoodItem(Request $request){
        
        $output = "";
        $value = $request->search;
        $sql1 = Items::where('name', 'LIKE', '%'.$value.'%')
                ->orWhere('code', 'LIKE', '%'.$value.'%')->get();
        if( count($sql1)>0 && $value !=NULL ){
            $output .= '<h3 align = "center"> <u> Search Result </u> </h3><br>';
            $output .= '<div class = "container form-group col-xs-12">
                            <div class = "form-group col-xs-1">
                                <h4><u>SL.</u></h4>
                            </div>
                            <div class = "form-group col-xs-3">
                                <h4><u>Food Name</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Menu ID</u></h4>
                            </div>
                            <div class = "form-group col-xs-1">
                                <h4><u>Stock</u></h4>
                            </div>
                            <div class = "form-group col-xs-1">
                                <h4><u>BP</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Quantity</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Actions</u></h4>
                            </div>
                        </div>';
            $postOrder='addOrder';
            $csrf = "{{!! csrf_token() !!}}";
            foreach($sql1 as $sql1){

                $output .= '<form method="POST" action="'.$postOrder.'">
                                <div class = "container form-group col-xs-12">
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="id" value ="'.$sql1['id'].'" placeholder="'.$sql1['id'].'">
                                    </div>
                                    <div class = "container form-group col-xs-3">
                                        <input type="text" class="form-control" name="name" value ="'.$sql1['name'].'" placeholder="'.$sql1['name'].'">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="text" class="form-control" name="code" value ="'.$sql1['code'].'" placeholder="'.$sql1['code'].'">
                                    </div>
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="stock" value ="'.$sql1['stock'].'" placeholder="'.$sql1['stock'].'">
                                    </div>
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="base_price" value ="'.$sql1['base_price'].'" placeholder="£ '.$sql1['base_price'].'">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="submit" value="ADD" role="button" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>';
            }

            // foreach($sql2 as $sql2){
            //     $output .= '
            //                 <tr>
            //                     <td>'.$sql2['id'].'</td>
            //                     <td>'.$sql2['name'].'</td>
            //                     <td>'.$sql2['code'].'</td>
            //                     <td>'.$sql2['stock'].'</td>
            //                     <td>'.$sql2['base_price'].'</td>
            //                     <td>'.$sql2['created_at'].'</td>
            //                     <td>'.$sql2['updated_at'].'</td>
            //                 </tr>';  
            // }
        }
        else if ($value == ''){
            $output.="";
        }
        else{
            $output .= '<h3 align = "center"> <u>Search Result</u> </h3> <h4 align = "center" >Food Item Not Found !!</h4>';
        }
        return $output;
    }

/**
     * Get Responsive Search for the Food table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchCustomers(Request $request){
        
        $output = "";
        $value = $request->search;
        $sql1 = Customers::where('name', 'LIKE', '%'.$value.'%')
                ->orWhere('phone', 'LIKE', '%'.$value.'%')->get();
        if( count($sql1)>0 && $value !=NULL ){
            $output .= '<h3 align = "center"> <u> Search Result </u> </h3>';
            $output .= '<table class = "table table-bordered table-hover">
                            <tr> 
                                <th>SL.</th>
                                <th>Full Name</th>
                                <th>Caller ID</th>
                                <th>Address</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>';
            $getEdit='/admin/customer/edit/';
            $delete='/admin/customer/delete/';
            foreach($sql1 as $sql1){
                $create = date('M j, Y', strtotime($sql1['created_at']));
                $update = date('M j, Y', strtotime($sql1['updated_at']));
                $output .= '
                            <tr>
                                <td>'.$sql1['id'].'</td>
                                <td>'.$sql1['name'].'</td>
                                <td>'.$sql1['phone'].'</td>
                                <td>'.$sql1['address'].'</td>
                                <td>'.$create.'</td>
                                <td>'.$update.'</td>
                                <td>
                                    <div>
                                        <form method="GET" action="'.$getEdit. $sql1['id'].'" style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
                                        </form>
                                
                                        <form method="GET" action="'.$delete. $sql1['id'].'" style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
                                        </form>
                                    </div>
	                            </td>
                            </tr>';
            }
            $output .= '</table>';

            // foreach($sql2 as $sql2){
            //     $output .= '
            //                 <tr>
            //                     <td>'.$sql2['id'].'</td>
            //                     <td>'.$sql2['name'].'</td>
            //                     <td>'.$sql2['code'].'</td>
            //                     <td>'.$sql2['stock'].'</td>
            //                     <td>'.$sql2['base_price'].'</td>
            //                     <td>'.$sql2['created_at'].'</td>
            //                     <td>'.$sql2['updated_at'].'</td>
            //                 </tr>';  
            // }
        }
        else if ($value == ''){
            $output.="";
        }
        else{
            $output .= '<h3 align = "center"> <u>Search Result</u> </h3> <h4 align = "center" >Customer Not Found !!</h4>';
        }

        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

            $item = Items::find($id);
            
            if($admin->type == 1) {
                return $output;
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }

    }

    public function searchOnlineOrderFoodItem(Request $request){
        
        $output = "";
        $value = $request->search;
        $sql1 = Items::where('name', 'LIKE', '%'.$value.'%')
                ->orWhere('code', 'LIKE', '%'.$value.'%')->get();
        if( count($sql1)>0 && $value !=NULL ){
            $output .= '<h3 align = "center"> <u> Search Result </u> </h3><br>';
            $output .= '<div class = "container form-group col-xs-12">
                            <div class = "form-group col-xs-1">
                                <h4><u>SL.</u></h4>
                            </div>
                            <div class = "form-group col-xs-3">
                                <h4><u>Food Name</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Menu ID</u></h4>
                            </div>
                            <div class = "form-group col-xs-1">
                                <h4><u>Stock</u></h4>
                            </div>
                            <div class = "form-group col-xs-1">
                                <h4><u>BP</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Quantity</u></h4>
                            </div>
                            <div class = "form-group col-xs-2">
                                <h4><u>Actions</u></h4>
                            </div>
                        </div>';
            $postOrder='/admin/addOnlineOrder';
            $csrf = "{{!! csrf_token() !!}}";
            foreach($sql1 as $sql1){

                $output .= '<form method="POST" action="'.$postOrder.'">
                                <div class = "container form-group col-xs-12">
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="id" value ="'.$sql1['id'].'" placeholder="'.$sql1['id'].'">
                                    </div>
                                    <div class = "container form-group col-xs-3">
                                        <input type="text" class="form-control" name="name" value ="'.$sql1['name'].'" placeholder="'.$sql1['name'].'">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="text" class="form-control" name="code" value ="'.$sql1['code'].'" placeholder="'.$sql1['code'].'">
                                    </div>
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="stock" value ="'.$sql1['stock'].'" placeholder="'.$sql1['stock'].'">
                                    </div>
                                    <div class = "container form-group col-xs-1">
                                        <input type="text" class="form-control" name="base_price" value ="'.$sql1['base_price'].'" placeholder="£ '.$sql1['base_price'].'">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                                    </div>
                                    <div class = "container form-group col-xs-2">
                                        <input type="submit" value="ADD" role="button" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>';
            }

            // foreach($sql2 as $sql2){
            //     $output .= '
            //                 <tr>
            //                     <td>'.$sql2['id'].'</td>
            //                     <td>'.$sql2['name'].'</td>
            //                     <td>'.$sql2['code'].'</td>
            //                     <td>'.$sql2['stock'].'</td>
            //                     <td>'.$sql2['base_price'].'</td>
            //                     <td>'.$sql2['created_at'].'</td>
            //                     <td>'.$sql2['updated_at'].'</td>
            //                 </tr>';  
            // }
        }
        else if ($value == ''){
            $output.="";
        }
        else{
            $output .= '<h3 align = "center"> <u>Search Result</u> </h3> <h4 align = "center" >Food Item Not Found !!</h4>';
        }

         if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
            
            if($admin->type == 1) {
                return $output;
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }

        
    }

/**
     * Get Responsive Search for the Food table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchOnlineCustomers(Request $request){
        
        $output = "";
        $value = $request->search;
        $sql1 = Customers::where('name', 'LIKE', '%'.$value.'%')
                ->orWhere('phone', 'LIKE', '%'.$value.'%')->get();
        if( count($sql1)>0 && $value !=NULL ){
            $output .= '<h3 align = "center"> <u> Search Result </u> </h3>';
            $output .= '<table class = "table table-bordered table-hover">
                            <tr> 
                                <th>SL.</th>
                                <th>Full Name</th>
                                <th>Caller ID</th>
                                <th>Address</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>';
            $getEdit='/admin/online-customer/add/';
            $delete='/admin/customer/delete/';
            foreach($sql1 as $sql1){
                $create = date('M j, Y', strtotime($sql1['created_at']));
                $update = date('M j, Y', strtotime($sql1['updated_at']));
                $output .= '
                            <tr>
                                <td>'.$sql1['id'].'</td>
                                <td>'.$sql1['name'].'</td>
                                <td>'.$sql1['phone'].'</td>
                                <td>'.$sql1['address'].'</td>
                                <td>'.$create.'</td>
                                <td>'.$update.'</td>
                                <td>
                                    <div>
                                        <form method="GET" action="'.$getEdit. $sql1['id'].'" style="display: inline-block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" value="ADD" role="button" class="btn btn-primary btn-md">
                                        </form>
                                    </div>
	                            </td>
                            </tr>';
            }
            $output .= '</table>';

            // foreach($sql2 as $sql2){
            //     $output .= '
            //                 <tr>
            //                     <td>'.$sql2['id'].'</td>
            //                     <td>'.$sql2['name'].'</td>
            //                     <td>'.$sql2['code'].'</td>
            //                     <td>'.$sql2['stock'].'</td>
            //                     <td>'.$sql2['base_price'].'</td>
            //                     <td>'.$sql2['created_at'].'</td>
            //                     <td>'.$sql2['updated_at'].'</td>
            //                 </tr>';  
            // }
        }
        else if ($value == ''){
            $output.="";
        }
        else{
            $output .= '<h3 align = "center"> <u>Search Result</u> </h3> <h4 align = "center" >Customer Not Found !!</h4>';
        }

        if (Auth::check())
        {
            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
            
            if($admin->type == 1) {
                return $output;
            }
            else if($admin->type == 0 ){
                return redirect()->route('place.item');
            }
        } else {
             return redirect()->route('logout');
        }

       
    }


}


