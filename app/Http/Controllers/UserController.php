<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list()
    {
        $user_list=User::paginate(5);
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
                'first_name'=>$request->FirstName,
                'last_name'=>$request->LastName,
                'email'=>$request->email,
                'password'=>$request->password,
                'image'=>$fileName,
        ]);


//        return redirect()->route('category.list');
        return redirect()->route('users.create')->with('message','Value Added Successfully.');

    }
    public function login()
    {
        return view('backend.pages.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required|string|email:users',
            'password'=>'required|string:users'
        ]);
        $credentials=$request->except('_token');
        //dd($credentials);
    //    $credentials=$request->only(['email','password']);
        Auth::attempt($credentials);
        if(auth()->user())
        {
            
            return redirect()->route('dashboard');

        }
       // dd('logon oi nai');
        return redirect()->back()->with('message','invalid credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message1','Logout successful.');
    }
}
