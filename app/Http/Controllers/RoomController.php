<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function vip()
    { 
        $room=Room::all();
        return view("backend.pages.rooms.list",compact('room'));
    }
    public function createform()
    {
        return view('backend.pages.rooms.create');
    }
    public function store(Request $request)
    {
        $fileName=null;
        if($request->hasFile('image'))
        {
            // dd("true");
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        } 
        Room::create([
            'room_image'=>$fileName,
            'room_name'=>$request->room,
            'room_id'=>$request->room_id,
            'room_no'=>$request->room_no,
            'room_type'=>$request->room_type,
            'amount'=>$request->amount,
            'amenities_id'=>$request->amenities_id,
            'amenities'=>$request->amenities,
            'amenities_description'=>$request->description,
            'accomodate'=>$request->accomodate,
        ]);
        return redirect()->back()->with('message','Data added successfully.');
    }
    public function roomdelete($roomDelete)
    {
        
        Room::find($roomDelete)->delete();
        return redirect()->back()->with('message','room deleted successfully.');
        
    }
    public function roomEdit($roomEdit)
    {
        $room=Room::find($roomEdit);
        return view('backend.pages.rooms.edit',compact('room'));
    }
    public function Update(Request $request,$roomUpdate)
    {
        
        $room=Room::find($roomUpdate); 
        $fileName=$room->image;

        if($request->hasFile('image'))
        {
            // dd("true");
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        } 
        $room->update([
            'room_image'=>$fileName,
            'room_name'=>$request->room,
            'room_id'=>$request->room_id,
            'room_no'=>$request->room_no,
            'room_type'=>$request->room_type,
            'amount'=>$request->amount,
            'amenities_id'=>$request->amenities_id,
            'amenities'=>$request->amenities,
            'amenities_description'=>$request->description,
            'accomodate'=>$request->accomodate,  
        ]);
        return redirect()->route('rooms')->with('message','Update successfull.');

    }
    public function roomView($roomView)
    {
        $room=Room::find($roomView);
        return view('backend.pages.rooms.view',compact('room'));
    }
}

