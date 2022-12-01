<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function vip()
    {
        return view("backend.pages.rooms.list");
    }
    public function createform()
    {
        return view('backend.pages.rooms.create');
    }
}
