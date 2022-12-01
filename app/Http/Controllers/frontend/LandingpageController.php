<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Room_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LandingpageController extends Controller
{
  public function home()
  {
    $room=Room_type::first();
    // dd($room);
    return view('frontend.webside',compact('room'));
  }
  public function signup(request $request)
  {
    //    dd($request->all());
    User::create([
      //database column name => input field name
      'first_name' => $request->FirstName,
      'last_name' => $request->LastName,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'role' => 'user'
    ]);
    Alert::success('Registration Successfull');
    return redirect()->back();
  }
  public function login(request $request)
  {
    //    dd($request->all());
    $credentials = $request->except('_token');
    //    dd($credentials);
    if (auth()->attempt($credentials)) {
      // dd("true");
      return redirect()->back();
    }
    // dd("false");
  }
  public function logout()
  {
    auth()->logout();
    Alert::success('Logout', 'Logout Successful');
    return redirect()->back();
  }
}
