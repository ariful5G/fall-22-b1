<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function list()
    {
        return view("backend.pages.guest.guest");
    }
    public function create()
    {
        return view("backend.pages.guest.create");
    }
}
