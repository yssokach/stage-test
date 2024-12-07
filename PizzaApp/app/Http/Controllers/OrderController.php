<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $order = Order::create([
            'total_amount' => $request->total_amount,
            'total_cost' => $request->total_cost,
            'total_profit' => $request->total_profit,
            'status' => 'pending'
        ]);

        $order->pizzas()->sync($request->pizza_ids);

        return redirect()->route('orders.show', $order->id);
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
