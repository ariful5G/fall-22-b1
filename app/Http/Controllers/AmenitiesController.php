<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function list()
    {
        return view("backend.pages.amenities");
    }
}
