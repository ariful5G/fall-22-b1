<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $rooms =Booking::with('roomRelation')->get();
     

        return view('backend.pages.booking',compact('rooms'));
    }

}
