<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CreateUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('users', ['users' => $users]);
    }


    function add(){
        return view('admin.adduser');
    }

    function create(CreateUser $request){
        User::create([
            'id' => $request->id,
            'email'    => $request->email,
            'password' => Hash::make($request->first_name),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'status_id' => $request->status,
            'bilance' => 0,
        ]);

        return redirect('/');
    }


}
