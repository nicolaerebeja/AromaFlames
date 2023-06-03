<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OrderRequest;
use Carbon\Carbon;
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
        // Șterge produsul din baza de date
        $order->delete();

        // Redirecționează utilizatorul către pagina de index a produselor sau la alta pagină relevantă
        return redirect()->route('order.index')->with('success', 'Comanda a fost șters cu succes!');
    }

    public function createFromRequest($id){
        $orderRequest = OrderRequest::find($id);

        $orderDetails = json_decode($orderRequest->order_details);
        $total = $this->calculateTotal($orderDetails);

        $customer = Customer::where('phone', $orderRequest->phone)->first();

        if ($customer == null) {
            $customer = $this->createNewCustomer($orderRequest);
        }

        $createdAt = Carbon::parse($orderRequest->created_at);
        $delivery_date = $createdAt->addDays(5);

        $order = new Order();
        $order->order_date = $orderRequest->created_at;
        $order->delivery_date = $delivery_date;
        $order->client_id = $customer->id;
        $order->order_type = "Request Order";
        $order->quantity = $total['quantity'];
        $order->aroma = '//';
        $order->packaging = '//';
        $order->details = 'Detalii: '.$orderRequest->order_notes;
        $order->price = $total['price'];
        $order->sale = 0;
        $order->advance_amount = 0;
        $order->status = 'assigned';
        $order->payment_method = $orderRequest->payment_method;
        $order->shipping_address = $orderRequest->street;
        $order->is_paid = 0;
        $order->is_shipped = 0;
        $order->save();

        $orderRequest->order_id = $order->id;
        $orderRequest->save();

        return redirect()->route('order.show', ['order' => $order])->with('success', 'Order created successfully.');

    }
    private function createNewCustomer($orderRequest)
    {
        $customer = new Customer;
        $customer->name = $orderRequest->firstname . " " . $orderRequest->lastname;
        $customer->phone = $orderRequest->phone;
        $customer->details = "Client nou din Order Request";
        $customer->source = "Website";
        $customer->address = $orderRequest->street;
        $customer->data_registered = $orderRequest->created_at;
        $customer->sex = "woman";
        $customer->save();

        return $customer;
    }

    public function calculateTotal($orderDetails)
    {
        $totalQuantity = 0;
        $totalPrice = 0;

        foreach ($orderDetails as $key => $value) {
            if (strpos($key, 'product') === 0) {
                $product = json_decode($value);
                $quantity = $product->quantity;
                $price = $product->price;

                $totalQuantity += $quantity;
                $totalPrice += $quantity * $price;
            }
        }

        return [
            'quantity' => $totalQuantity,
            'price' => $totalPrice,
        ];
    }

}
