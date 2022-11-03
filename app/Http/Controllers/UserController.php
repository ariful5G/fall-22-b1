<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $user_list=User::all();
        return view('backend.pages.user_list.users',compact('user_list'));
    }

    public function createForm()
    {
        return view('backend.pages.user_list.create');
    }

    public function store(Request $request)
    {
       //dd($request->all());
        User::create([
            //database column name => input field name
                'fast_name'=>$request->FirstName,
                'last_name'=>$request->LastName,
                'email'=>$request->email,
                'password'=>$request->password,
        ]);

//        return redirect()->route('category.list');
        return redirect()->back();

    }
}
