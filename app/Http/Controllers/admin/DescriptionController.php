<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Product;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $description = Description::orderBy('id', 'desc')->get();
        return view('admin.description.index', compact('description'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.description.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'name' => 'required',
        ]);

        // Creează un nou obiect Product cu datele validate
        $description = new Description;
        $description->description = $request->description;
        $description->name = $request->name;


        // Salvează noul produs în baza de date
        $description->save();

        return redirect()->route('description.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Description $description)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Description $description)
    {
        return view('admin.description.edit', compact('description'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Description $description)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'name' => 'required',
        ]);

        $description->description = $request->description;
        $description->name = $request->name;

        $description->save();

        return redirect()->route('description.index')->with('success', 'Descrierea a fost actualizată cu succes!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Description $description)
    {
        $description->delete();

        return redirect()->route('description.index')->with('success', 'Produsul a fost șters cu succes!');
    }
}
