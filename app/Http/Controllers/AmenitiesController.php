<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function list()
    {
        return view("backend.pages.amenities.list");
    }
    public function create()
    {
        return view("backend.pages.amenities.create");
    }
    public function store(Request $request)

    {
      
        Amenity::create([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
    
        return redirect()->back()->with('message','amenity added successfully.');
    }
}
