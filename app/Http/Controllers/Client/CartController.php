<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('client.shoppingcart.index');
    }

    public function add(CartHelper $cart, $id)
    {
        $product = Product::find($id);

        $cart->add($product); 

        return redirect()->back(); 
    }

    public function remove(CartHelper $cart, $id)
    {
       
        $cart->remove($id); 

        return redirect()->back(); 
    }

    public function update(CartHelper $cart, $id, $quantity)
    {
        $cart->update($id, $quantity); 

        return redirect()->back(); 
    }

    public function clear(CartHelper $cart)
    {
       $cart->clear();
       return redirect()->back(); 
    }

}