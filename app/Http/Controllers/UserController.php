<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
            $admin = User::find($user_id);

            if($admin->type == 1 && $admin->sup_admin == 0 ) {

                $admin_user = User::where([
                        ['type', '=', '1'],
                        ['sup_admin', '=', '0'],
                    ])->get();
                $guest_user = User::where('type', '=', '0')->get();


                return $admin_user;

                return view('admin_settings')
                    ->with(compact('admin_user', 'guest_user', '$admin'));
            }
            else if($admin->type == 1 && $admin->sup_admin == 1){

                $admin_user = User::where('type', '=', '1')->get();
                $guest_user = User::where('type', '=', '0')->get();

                return  $admin_user;
            }
            else if($admin->type == 0 && $admin->sup_admin == 0){
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
    public function create()
    {
        return "Crate"
;    }

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
