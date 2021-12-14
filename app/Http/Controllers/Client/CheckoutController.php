<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\order_detail;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('client.checkout.index');

    }

    public function store(Request $request, CartHelper $cart)
    {
        // $request->validate([
        //     'cateName' => 'required|min:4'
        // ], [
        //     'cateName.required' => 'Vui long khong bo trong',
        //     'cateName.min' => 'Vui lòng nhập nhiều hơn xíu'
        // ]); 
    
        $order_adress = $request->ord_address . ", " . $request->ord_province;
        $order_quantity = $cart->total_quantity; 
        $order_total = $cart->total_price; 
        $order_total_without_discount = $cart->total_price_without_discount; 

        if ($order = Order::create([
            'customer_name' => $request->ord_customer,
        'email' => $request->ord_email ,
        'address'=> $order_adress,
        'note'=> $request->ord_note,
        'amount_product'=> $order_quantity,
        'origin_total'=> $order_total_without_discount,
        'last_total'=> $order_total,
        ])) {
            $order_id = $order->id; 
            foreach ($cart->items as $product_id => $item) {
                $quantity = $item['quantity']; 
                $price = $item['finalPrice']; 

                order_detail::create([
                    'order_id' => $order_id,
                    'product_id' => $product_id, 
                    'price' => $price, 
                    'quantity' => $quantity, 
                ]); 
                # code...
            }

            session(['cart' => '']); 
            return redirect()->route('home-page'); 
        }
    }
}