<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Description;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $description = Description::orderBy('id', 'desc')->get();
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.product.create', compact('description', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validează datele primite în request
        $validatedData = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'image' => 'required',
            'info' => 'required',
        ]);

        // Creează un nou obiect Product cu datele validate
        [$width, $height] = getimagesize($request->image);

        $newImageName = $width.'x'.$height.'-'.Str::slug($request->name, '-') . '.webp';
        $request->image->move(public_path('images/candles'), $newImageName);



        $product = new Product;
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->category_id = $request->category;
        $product->description_id = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
//        $product->images = $request->images;
        $product->info = $request->info;
        $product->images = 'images/candles/' . $newImageName;
        // Salvează noul produs în baza de date
        $product->save();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('product.index')->with('success', 'Produsul a fost adăugat cu succes!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $description = Description::orderBy('id', 'desc')->get();
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.product.edit', compact('product', 'description', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validează datele primite în request
        $validatedData = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'info' => 'required',
        ]);

        // Actualizează câmpurile produsului cu datele primite în request
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->category_id = $request->category;
        $product->description_id = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->info = $request->info;

        // Verifică dacă a fost încărcată o nouă imagine
        if ($request->hasFile('image')) {
            // Validează și procesează noua imagine
            $validatedImage = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Exemplu de reguli de validare, puteți ajusta la nevoie
            ]);

            [$width, $height] = getimagesize($request->image);
            $newImageName = $width.'x'.$height.'-'.Str::slug($request->name, '-') . '.webp';
            $request->image->move(public_path('images/candles'), $newImageName);

            // Actualizează calea imaginii în baza de date
            $product->images = 'images/candles/' . $newImageName;
        }

        // Salvează produsul actualizat în baza de date
        $product->save();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('product.index')->with('success', 'Produsul a fost actualizat cu succes!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Șterge produsul din baza de date
        $product->delete();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('product.index')->with('success', 'Produsul a fost șters cu succes!');
    }

}
