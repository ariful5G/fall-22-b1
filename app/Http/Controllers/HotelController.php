<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function Home()
    {
        return view("backend.pages.Hotel.list");
    }
    public function create()
    {
        return view("backend.pages.hotel.create");
    }
}
