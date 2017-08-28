<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\TawayItems;
use Sesssion;

class OnsiteItemController extends Controller
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

                return view('onsiteOrderDrinks');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderDrinks');
            }
        } else {
             return redirect()->route('logout');
        } 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function drinks(){

        return redirect()->route('onsite-orders');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function desert(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderIceCreamDesserts');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderDessert');
            }
        } else {
             return redirect()->route('logout');
        } 
        
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sides(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
            
            if($admin->type == 1) {

                return view('onsiteOrderSides');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderSides');
            }
        } else {
             return redirect()->route('logout');
        } 
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pizza(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);
            if($admin->type == 1) {

                return view('onsiteOrderPizza');
            }
            else if($admin->type == 0 ){
                 return view('onsiteUserOrderPizza');
            }
        } else {
             return redirect()->route('logout');
        } 
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function curry(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderCurry');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderCurry');
            }
        } else {
             return redirect()->route('logout');
        } 
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shawarma(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderShawarma');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderShawarma');
            }
        } else {
             return redirect()->route('logout');
        } 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wrap(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderWrap');
            }
            else if($admin->type == 0 ){
                 return view('onsiteUserOrderWrap');
            }
        } else {
             return redirect()->route('logout');
        } 
    }   
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function burgers(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderBurger');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderBurger');
            }
        } else {
             return redirect()->route('logout');
        } 
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grilled(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderGrilled');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderGrilled');
            }
        } else {
             return redirect()->route('logout');
        } 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salads(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {

                return view('onsiteOrderSaladsMezze');
            }
            else if($admin->type == 0 ){
                return view('onsiteUserOrderSalads');
            }
        } else {
             return redirect()->route('logout');
        } 
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spdeals(){
        if (Auth::check()){

            $user_id = Auth::user()->getId();
            $admin = User::find($user_id);

          //  $customers = Customers::all();
            
            if($admin->type == 1) {
                return view('onsiteOrderSpecialDeals');
            }
            else if($admin->type == 0 ){
                 return view('onsiteUserOrderSpdeals');
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
