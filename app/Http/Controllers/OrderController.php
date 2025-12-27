<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all()->sortByDesc('created_at');
        return view('admin.order', compact('orders'));
    }

    public function show(){
        $order = Order::findorFail($id);
        $orderItem = OrderItem::where('order_id', $order->id)->get();
        return view('admin.order.show', compact('order', 'orderItems'));
    }
}
