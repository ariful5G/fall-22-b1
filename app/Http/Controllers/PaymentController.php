<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list()
    {
        $payment= Booking::all();
        return view("backend.pages.payment",compact('payment'));
    }
}
