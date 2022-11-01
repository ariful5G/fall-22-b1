<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hotel extends Controller
{
    public function Home()
    {
        return view("backend.pages.hotel");
    }
}
