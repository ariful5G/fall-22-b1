<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Arif extends Controller
{
    public function Home(){
        return view("welcome");
    }
}
