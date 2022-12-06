<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Booking;
use App\Models\Room_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LandingpageController extends Controller
{
  public function home()
  {
    $rooms=Room_type::all();
    // dd($rooms);
    return view('frontend.pages.home',compact('rooms'));
  }
  public function signup(request $request)
  {
    //dd($request->all());
    User::create([
      //database column name => input field name
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'contact' => $request->contact,
      'address' => $request->address,
      'gender' => $request->gender,
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
  public function roomView($roomView)
    {
        $rooms=Room_type::all();
        $room=Room_type::find($roomView);
        return view('frontend.pages.room_view',compact('room','rooms'));
    }
    public function viewBookingForm($room_id)
    {
       $room=Room_type::find($room_id);
        return view('frontend.pages.booking_form',compact('room'));
    }
    public function store(Request $request,$room_id)
    {

        // create the order
        Booking::create([
           //'user_id'=>auth()->user()->id,
           //'room_id'=>$room_id,
           'name'=>$request->name,
           'email'=>$request->email,
           'check_in_date'=>$request->check_in,
           'check_out_date'=>$request->check_out,
           'guest'=>$request->guest,
           'days'=>$request->days,
           'contact'=>$request->contact,
           'address'=>$request->address,
           'status'=>$request->status,
        ]);
      
        return redirect()->route('website');

    }
}
