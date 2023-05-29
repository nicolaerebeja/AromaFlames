<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function index($slug)
    {
        $productName = str_replace('-', ' ', $slug);

        $product = Product::where('name', $productName)->first();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        $productoption = ProductOption::orderBy('id', 'desc')->get();

        return view('client.product', compact('product', 'relatedProducts', 'productoption'));

    }
}
