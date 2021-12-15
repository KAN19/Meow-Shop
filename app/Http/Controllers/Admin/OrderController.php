<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $list_orders = Order::all(); 
        return view('admin.order.index', compact('list_orders')); 
    }

    public function showOrderDetail($id)
    {
        $order = Order::where('id', $id)->first(); 
        return view('admin.order.orderDetail', compact('order')) ;
    }

    public function cancelOrderDetail($id)
    {
        $order = Order::where('id', $id)->first(); 
        $order->order_status = "canceled";
        $order->is_canceled = true; 
        $order->save(); 
        return redirect()->route('show-orders') ;
    }

    public function confirmOrderDetail($id)
    {
        $order = Order::where('id', $id)->first(); 
        $order->order_status = "shipping";
        $order->is_confirmed = true; 
        $order->save(); 
        return redirect()->route('show-orders') ;
    }

    public function completeORderDetail($id)
    {
        $order = Order::where('id', $id)->first(); 
        $order->order_status = "completed";
        $order->is_completed = true; 
        $order->save(); 
        return redirect()->route('show-orders') ;
    }

}