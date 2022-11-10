<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $user_list=User::paginate(7);
        return view('backend.pages.user_list.users',compact('user_list'));
    }

    public function createForm()
    {
        return view('backend.pages.user_list.create');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate(['email'=>'required|unique:users,email',]);

        $fileName=null;
        if($request->hasFile('image'))
        {
            // dd("true");
            // generate name
            $fileName=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        } 

        User::create([
            //database column name => input field name
                'fast_name'=>$request->FirstName,
                'last_name'=>$request->LastName,
                'email'=>$request->email,
                'password'=>$request->password,
                'image'=>$fileName,
        ]);


//        return redirect()->route('category.list');
        return redirect()->back();

    }
}
