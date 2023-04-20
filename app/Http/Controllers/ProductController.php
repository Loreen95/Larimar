<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $data = Products::all();

        return view('pages.products')->with('data', $data);
    }
}
