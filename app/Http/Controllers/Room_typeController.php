<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Room_typeController extends Controller
{
    public function list()
    {
        return view("backend.pages.room_type");
    }
}
