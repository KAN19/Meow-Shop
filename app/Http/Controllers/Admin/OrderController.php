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

}