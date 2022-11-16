<?php

namespace App\Http\Controllers;

use App\Models\Room_type;
use Illuminate\Http\Request;

class Room_typeController extends Controller
{
    public function list()
    {
        $room_types=Room_type::paginate(3);
        return view('backend.pages.room_types.Room_type', compact('room_types'));
    }
    public function CreateForm()
    {
        return view('backend.pages.room_types.list');
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
        Room_type::create([
            'room_image'=>$fileName,
            'name'=>$request->room_name,
            'amount'=>$request->amount,
        ]);
    
        return redirect()->back();
    }
}
