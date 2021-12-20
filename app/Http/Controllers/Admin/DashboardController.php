<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalProducts = Product::all(); 
        $totalOrders = Order::all(); 
        $pendingOrders = Order::where('order_status', '=', 'pending')->get(); 
        $confirmedOrders = Order::where('order_status', '=', 'confirmed')->get(); 
        $completedOrders = Order::where('order_status', '=', 'completed')->get(); 
        $canceledOrders = Order::where('order_status', '=', 'canceled')->get(); 

       return view('admin.dashboard.index', compact('totalProducts', 'totalOrders', 'pendingOrders', 'confirmedOrders', 'completedOrders', 'canceledOrders'));
    }
}