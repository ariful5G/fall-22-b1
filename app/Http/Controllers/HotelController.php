<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function Home()
    {
        $hotel=Hotel::all();
        return view("backend.pages.Hotel.list",compact('hotel'));
    }
    public function create()
    {
        return view("backend.pages.hotel.create");
    }
    public function store(Request $request)
    {
        Hotel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'city'=>$request->city
            
        ]);
        return redirect()->back()->with('message','Data added successfully.');
    }
    public function infoDelete($holelInfoDelete)
    {
        Hotel::find($holelInfoDelete)->delete();
        return redirect()->back()->with('message','Data delete successfully.');
    }
    public function hotelEdit($hotelEdit)
    {
        $hotel=Hotel::find($hotelEdit);
        return view('backend.pages.hotel.edit',compact('hotel'));
    }
    public function hotelUpdate(Request $request,$hotelUpdate)
    {
        
        $hotel=Hotel::find($hotelUpdate); 

        $hotel->update([
            'name'=>$request->name,
            'email'=>$request->email,  
            'address'=>$request->address,  
            'contact'=>$request->contact,  
            'city'=>$request->city,  
        ]);
        return redirect()->route('hotel')->with('message','Update successfull.');

    }
    public function hotelView($hotelView)
    {
        $hotel=Hotel::find($hotelView);
        return view('backend.pages.hotel.hotel_view',compact('hotel'));
    }
}
