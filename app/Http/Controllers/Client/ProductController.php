<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $listProducts = Product::all(); 
        $listCategories = category::all(); 
        // dd($listProducts); 

        return view('client.products.index', compact('listProducts', 'listCategories'));
    }
}