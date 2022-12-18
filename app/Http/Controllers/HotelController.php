<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function Home()
    {
        $hotel=Hotel::all();
        return view("backend.pages.hotel.list",compact('hotel'));
    }
    public function create()
    {
        return view("backend.pages.hotel.create");
    }
    public function store(Request $request)
    {
        Hotel::create([
            'Name'=>$request->name,  
            'Email'=>$request->email,  
            'Address'=>$request->address,  
            'Contact'=>$request->contact,  
            'Website'=>$request->website,
            
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
            'Name'=>$request->name,  
            'Email'=>$request->email,  
            'Address'=>$request->address,  
            'Contact'=>$request->contact,  
            'Website'=>$request->website,  
        ]);
        return redirect()->route('hotel')->with('message','Update successfull.');

    }
    public function hotelView($hotelView)
    {
        $hotel=Hotel::find($hotelView);
        return view('backend.pages.hotel.sk',compact('hotel'));
    }
}
