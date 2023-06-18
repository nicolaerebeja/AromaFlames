<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderRequest;

class DashboardController extends Controller
{

    public function index()
    {

        $orderWithouotId = OrderRequest::where('order_id', null)->first();
        $statusCounts = $this->countOrdersByStatus();
        $orders = Order::orderBy('delivery_date', 'asc')->get();

        return view('admin.dashboard', compact('orderWithouotId', 'statusCounts', 'orders'));
    }

    public function countOrdersByStatus()
    {
        $counts = Order::select('status', \DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        $statusCounts = [
            'answered' => isset($counts['answered']) ? $counts['answered'] : 0,
            'work in progress' => isset($counts['work in progress']) ? $counts['work in progress'] : 0,
            'pending' => isset($counts['pending']) ? $counts['pending'] : 0,
            'assigned' => isset($counts['assigned']) ? $counts['assigned'] : 0,
        ];

        return $statusCounts;
    }
}
