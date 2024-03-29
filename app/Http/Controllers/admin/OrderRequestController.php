<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderRequest;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class OrderRequestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = OrderRequest::orderBy('id', 'desc')->get();
        return view('admin.order-request.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'apartment' => 'required',
            'note' => '',
            'payment_method' => 'required',
            'order_details' => 'required',
        ]);

        $street = $request->country . ', ' .  $request->city . ', ' . $request->street . ', ' . $request->apartment;

        $orderRequest = new OrderRequest();
        $orderRequest->firstname = $request->firstname;
        $orderRequest->lastname = $request->lastname;
        $orderRequest->email = $request->email;
        $orderRequest->phone = $request->phone;
        $orderRequest->street = $street;
        $orderRequest->order_notes = $request->note;
        $orderRequest->payment_method = $request->payment_method;
        $orderRequest->order_details = $request->order_details;

        $orderRequest->save();

        $telegram = new Api(config('services.telegram.bot_token'));
        $chatId = '-1001936851334';
        $message = 'New Order Request: '.$request->firstname." ".$request->lastname."\n";
        $orderUrl = route('order-request.show', ['order_request' => $orderRequest->id]);
        $message .= $orderUrl;

        $response = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return redirect()->route('checkoutView')->with('success', 'Comanda creată cu succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderRequest $orderRequest)
    {
        $order = $orderRequest;
        return view('admin.order-request.show', compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
