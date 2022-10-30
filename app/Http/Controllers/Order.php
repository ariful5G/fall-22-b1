<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function Home()
    {
        return view("backend.pages.order");
    }
}
