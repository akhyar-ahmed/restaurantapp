<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Items;

class SearchController extends Controller
{
    /**
     * Get Responsive Search for the Food table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function searchFoodItem(Request $request){
        return "hello";
        $output = "";
        $value = $request->search;
        $sql1 = Items::where('name', 'LIKE', '%$value%')->get()
                    ->orWhere('code', 'LIKE', '%$value%')->get();
        if( count($sql1)>0){
            $output .= '<h3 align = "center"> Search Result </h3>';
            $output .= '<div class = "table-responsive">
                            <table class = "table table bordered">
                                <tr> 
                                    <th>SL.</th>
                                    <th>Food Name</th>
                                    <th>Menu ID</th>
                                    <th>Stock</th>
                                    <th>Base Price</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>';
            foreach($sql1 as $sql1){
                $output .= '
                            <tr>
                                <td>'.$sql1['id'].'</td>
                                <td>'.$sql1['name'].'</td>
                                <td>'.$sql1['code'].'</td>
                                <td>'.$sql1['stock'].'</td>
                                <td>'.$sql1['base_price'].'</td>
                                <td>'.$sql1['created_at'].'</td>
                                <td>'.$sql1['updated_at'].'</td>
                            </tr>';
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
        else {
            $output .= "<h4> Data Not Found !!!</h4>";
        }
        return view('item_view')
            ->with(compact('output'))->render();
     }
}
