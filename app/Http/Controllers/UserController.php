<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        return view("backend.pages.users");
    }

    public function store(Request $request)
    {
//        dd($request->all());
        User::create([
            //database column name => input field name
                'fast_name'=>$request->FirstName,
                'last_name'=>$request->LastName,
                'status'=>$request->email,
                'description'=>$request->description
        ]);

//        return redirect()->route('category.list');
        return redirect()->back();

    }
}