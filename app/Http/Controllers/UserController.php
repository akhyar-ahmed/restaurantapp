<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests\CreateUserRequest;
use Session;

class UserController extends Controller
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
            $user = User::find($user_id);

            if($user->type == 1 && $user->sup_admin == 0 ) {

                $admin_user = User::where([
                        ['type', '=', '1'],
                        ['sup_admin', '=', '0'],
                    ])->get();
                $guest_user = User::where('type', '=', '0')->get();


                //return $admin_user;

                return view('admin_settings')
                    ->with(compact('admin_user', 'guest_user', 'user'));
            }
            else if($user->type == 1 && $user->sup_admin == 1){

                $admin_user = User::where('type', '=', '1')->get();
                $guest_user = User::where('type', '=', '0')->get();
                $all_user = User::where('type', '=', '1')
                                ->orWhere('type','=','0')->get();

                //return  $all_user;
                return view('admin_settings')
                    ->with(compact('admin_user', 'guest_user', 'user'));
            }
            else if($user->type == 0 && $user->sup_admin == 0){
                $admin_user = [];
                $guest_user = User::where('type', '=', '0')->get();
               // return redirect()->route('place.item');
                return view('user_settings')
                    ->with(compact('admin_user', 'guest_user', 'user'));
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
            $id = Auth::user()->getId();
            $admin = User::find($id);            
            if($admin->type == 1) {
                return view('create_user');
            }
            else if($admin->type == 0 )
                  return redirect()->back();
        } else {
             return redirect()->route('logout');
        }
;    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(CreateUserRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->temp_pass = $request->password;
        $user->password =bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->sup_admin = 0;
        if($request->type == "Admin")
            $user->type = 1;
        else
            $user->type = 0;
        
        $user->save();
        
        Session::flash('success', ' User Crested Successfully !!');
        
        return redirect()->route('get.user');
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
    public function getUpdate($id)
    {
        $user = User::find($id);
       
        return view('update_user')
            ->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(CreateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->temp_pass = $request->password;
        $user->password =bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->sup_admin = 0;
        if($request->type == "Admin")
            $user->type = 1;
        else
            $user->type = 0;
        
        $user->save();
        
        Session::flash('success', ' User Updated Successfully !!');
        
        return redirect()->route('get.user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        
        Session::flash('danger', ' User Deleted Successfully !!');
        
        return redirect()->route('get.user');   
    }
}
