<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('admin.customer.index', compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->orders = $request->orders;
        $customer->details = $request->details;
        $customer->source = $request->source;
        $customer->address = $request->address;
        $customer->data_registered = Carbon::createFromFormat('d/m/Y', $request->data_registered)->format('Y-m-d');
        $customer->sex = $request->sex;
        // Salvează noul produs în baza de date
        $customer->save();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('customer.index')->with('success', 'Clientul a fost adăugat cu succes!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $orders = Order::where('client_id', $customer->id)->get();
        return view('admin.customer.show', compact('customer', 'orders'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        // Actualizează câmpurile produsului cu datele primite în request
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->orders = $request->orders;
        $customer->details = $request->details;
        $customer->source = $request->source;
        $customer->address = $request->address;
        $customer->data_registered = Carbon::createFromFormat('d/m/Y', $request->data_registered)->format('Y-m-d');
        $customer->sex = $request->sex;

        // Salvează produsul actualizat în baza de date
        $customer->save();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('customer.index')->with('success', 'Clientul a fost actualizat cu succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
