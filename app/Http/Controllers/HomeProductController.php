<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function index($slug)
    {
        $productName = str_replace('-', ' ', $slug);

        $product = Product::where('name', $productName)->first();

        return view('client.product', compact('product'));
    }
}
