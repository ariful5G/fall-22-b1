<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $room=Booking::all();

        return view('backend.pages.booking',compact('room'));
    }
    public function bookingDelete($bookingDelete)
    {
        Booking::find($bookingDelete)->delete();
        return redirect()->back();
    }

}
