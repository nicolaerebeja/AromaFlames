<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index($slug)
    {
        $categoryName = str_replace('-', ' ', $slug);

        $category = Category::where('name', $categoryName)->first();

        return view('client.categorie-produs', compact('category'));
    }
}
