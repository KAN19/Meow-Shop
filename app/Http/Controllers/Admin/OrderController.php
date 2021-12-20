<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $list_orders = array(); 
        if ($request->from && $request->status) {
            $list_orders = Order::where('order_status', '=', $request->status)->whereBetween('created_at', [$request->from, $request->to])->orderBy("created_at", 'DESC')->get(); 
        } elseif ($request->from) {
            $list_orders = Order::whereBetween('created_at', [$request->from, $request->to])->orderBy("created_at", 'DESC')->get(); 
        } elseif ($request->status) {
            $list_orders = Order::where('order_status', '=', $request->status)->orderBy("created_at", 'DESC')->get(); 
        } else {
            $list_orders = Order::orderBy("created_at", 'DESC')->get();
        }
        
        // dd($list_orders);
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

    public function FilterOrder(Request $request)
    {
        $request->search;
        // $array_can_tim = array(); 
        // if ($gt_search = request()->search) { 
        //   $array_can_tim = Product::orderBy('created_at', 'DESC')->where('name', 'like', '%'.$gt_search.'%')->paginate(6);
        // }
  
        // return view('client.resultsearch.index',[
        //     'data'=>$array_can_tim,
        //     'search_name' =>$gt_search
        // ]);
    }
}