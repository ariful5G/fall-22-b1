<?php

namespace App\Http\Controllers;

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
}
