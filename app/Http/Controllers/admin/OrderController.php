<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->get();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('admin.order.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'order_date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('order_date'))->format('Y-m-d'),
            'delivery_date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('delivery_date'))->format('Y-m-d'),
        ]);

        $request->validate([
            'order_date' => 'required|date',
            'delivery_date' => 'required|date',
            'client_id' => 'required|exists:customers,id',
            'order_type' => 'nullable',
            'quantity' => 'nullable|integer',
            'aroma' => 'nullable',
            'packaging' => 'nullable',
            'details' => 'nullable',
            'price' => 'required|numeric',
            'sale' => 'nullable|numeric',
            'advance_amount' => 'nullable|numeric',
            'status' => 'required',
            'payment_method' => 'nullable',
            'shipping_address' => 'required',
            'is_paid' => 'required|boolean',
            'is_shipped' => 'required|boolean',
        ]);

        $order = new Order();
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->client_id = $request->client_id;
        $order->order_type = $request->order_type;
        $order->quantity = $request->quantity;
        $order->aroma = $request->aroma;
        $order->packaging = $request->packaging;
        $order->details = $request->details;
        $order->price = $request->price;
        $order->sale = $request->sale;
        $order->advance_amount = $request->advance_amount;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->shipping_address = $request->shipping_address;
        $order->is_paid = $request->is_paid;
        $order->is_shipped = $request->is_shipped;
        $order->save();

        return redirect()->route('order.index')->with('success', 'Order created successfully.');
    }


    public function show(Order $order)
    {
        return view('admin.order.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $customers = Customer::all();
        return view('admin.order.edit', compact('order', 'customers'));
    }

    public function update(Request $request, Order $order)
    {
        $request->merge([
            'order_date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('order_date'))->format('Y-m-d'),
            'delivery_date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('delivery_date'))->format('Y-m-d'),
        ]);

        $request->validate([
            'order_date' => 'required|date',
            'delivery_date' => 'required|date',
            'client_id' => 'required|exists:customers,id',
            'order_type' => 'nullable',
            'quantity' => 'nullable|integer',
            'aroma' => 'nullable',
            'packaging' => 'nullable',
            'details' => 'nullable',
            'price' => 'required|numeric',
            'sale' => 'nullable|numeric',
            'advance_amount' => 'nullable|numeric',
            'status' => 'required',
            'payment_method' => 'nullable',
            'shipping_address' => 'required',
            'is_paid' => 'required|boolean',
            'is_shipped' => 'required|boolean',
        ]);

        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->client_id = $request->client_id;
        $order->order_type = $request->order_type;
        $order->quantity = $request->quantity;
        $order->aroma = $request->aroma;
        $order->packaging = $request->packaging;
        $order->details = $request->details;
        $order->price = $request->price;
        $order->sale = $request->sale;
        $order->advance_amount = $request->advance_amount;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->shipping_address = $request->shipping_address;
        $order->is_paid = $request->is_paid;
        $order->is_shipped = $request->is_shipped;
        $order->save();

//        return redirect()->route('order.index')->with('success', 'Order updated successfully.');
        return redirect()->route('order.show', ['order' => $order])->with('success', 'Order updated successfully.');

    }


    public function destroy(Order $order)
    {
        // Șterge o comandă din baza de date
    }
}
