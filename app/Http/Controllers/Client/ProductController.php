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
        $listProducts = Product::orderBy("created_at", 'DESC')->paginate(9); 
        $listCategories = category::all(); 
        /* dd($listProducts); */
        return view('client.products.index', compact('listProducts', 'listCategories'));
    }

    public function showProductsByCategory($slug)
    {
        $listCategories = category::all(); 
        if (category::where('slug', $slug)->exists()) {
            $selectedCategory = category::where('slug', $slug)->first(); 
            $listProducts = Product::where('category_id', $selectedCategory->id)->orderBy("created_at", 'DESC')->paginate(9); 
        }
        
        return view('client.products.index', compact('listProducts', 'listCategories'));
    }

    public function showProductDetail($slug)
    {
        $product = Product::where('slug',$slug)->first(); 
        $relatedProducts = Product::where('category_id', '=' ,$product->category_id)->where('id', '<>', $product->id)->orderBy("created_at", 'DESC')->take(4)->get(); 

        return view('client.products.product-detail', compact('product', 'relatedProducts'));
    }

    public function resultsearch()
    {
        $array_can_tim = array(); 
        if ($gt_search = request()->search) { 
          $array_can_tim = Product::orderBy('created_at', 'DESC')->where('name', 'like', '%'.$gt_search.'%')->paginate(6);
        }
  
        return view('client.resultsearch.index',[
            'data'=>$array_can_tim,
            'search_name' =>$gt_search
        ]);
    }
}