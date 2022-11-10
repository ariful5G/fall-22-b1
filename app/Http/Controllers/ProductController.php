<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        // $products=Product::paginate(10);
        //compact('products')

        return view('backend.pages.products.list');
    }

    public function store()
    {

        return view('backend.pages.products.create');
    }
}
 