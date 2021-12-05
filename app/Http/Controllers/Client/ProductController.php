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
        $listProducts = Product::orderBy("created_at", 'DESC')->paginate(6); 
        $listCategories = category::all(); 

        return view('client.products.index', compact('listProducts', 'listCategories'));
    }

    public function showProductDetail($slug)
    {
        $product = Product::where('slug',$slug)->first(); 
        
        return view('client.products.product-detail', compact('product'));

        // $product = Produ
    }
}