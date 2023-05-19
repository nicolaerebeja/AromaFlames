<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index($slug)
    {

        if($slug === 'Toate-Lumânările'){
            $products = Product::all();
        }else {
            $categoryName = str_replace('-', ' ', $slug);
            $products = Product::whereHas('category', function ($query) use ($categoryName) {
                $query->where('name', $categoryName);
            })->get();
        }
        return view('client.categorie-produs', compact('products'));
    }
}
