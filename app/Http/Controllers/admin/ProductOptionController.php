<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductOption;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productoption = ProductOption::orderBy('id', 'desc')->get();
        return view('admin.product_options.index', compact('productoption'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product_options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'stock' => 'required'
        ]);

        $columnMappings = [
            'aroma' => 'aroma',
            'color' => 'color',
            'options' => 'options',
        ];

        $productoption = new ProductOption;

        $columnName = $columnMappings[$request->type] ?? null;

        if ($columnName) {
            $productoption->$columnName = $request->name;
        }

        $productoption->stock = $request->stock;

        $productoption->save();

        return redirect()->route('product_options.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOption $productoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductOption $productoption)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductOption $product_option)
    {
        $newStockValue = $product_option->stock == 0 ? 1 : 0;
        $product_option->stock = $newStockValue;
        $product_option->save();

        return redirect()->route('product_options.index')->with('success', 'Stock value updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductOption $product_option)
    {
        $product_option->delete();

        return redirect()->route('product_options.index')->with('success', 'Obtiunea a fost ștearsa cu succes!');
    }
}
