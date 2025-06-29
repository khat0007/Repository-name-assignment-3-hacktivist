<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return view('orders.index', compact('orders'));
    }
    public function show($id): View
    {
        // Use findOrFail to return 404 if not found
        $order = Order::findOrFail($id);

        // ✅ IDOR protection — only allow access to order owner
        if ($order->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('orders.show', compact('order'));
    }
}
