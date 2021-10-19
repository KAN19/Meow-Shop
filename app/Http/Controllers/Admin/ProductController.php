<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $listProducts = Product::all(); 
        // dd($listProducts); 
        $counter = 1; 

        return view('admin.product.index', compact('listProducts', 'counter'));
    }

    public function showCreateProduct()
    {
        $cates = category::orderby('name', 'ASC')->get();
        return view('admin.product.create', compact('cates'));
        
    }
    
    public function storeProduct(Request $request)
    {
        $request->validate([
            'prd_name' => 'required',
            'prd_category' => 'required',
            'prd_price' => 'required|numeric',
            'prd_discount' => 'nullable|numeric',
            'prd_description' => 'required',
        ], [
            'prd_name.required' => 'Nhap ten san pham dzo bro',
            'prd_category' => 'required',
            
        ]); 

        // dd($request->prd_category);
        $product = new Product(); 
        $product->name = $request->prd_name; 
        $product->slug = Str::slug($request->prd_name); 
        $product->status = $request->prd_status; 
        $product->category_id = $request->prd_category; 
        $product->price = $request->prd_price; 
        $product->discount = $request->prd_discount / 100; 
        $product->description = $request->prd_description; 
        $product->list_image = $request->prd_images; 

        $product->save(); 

        return redirect()->route('show-product'); 
    }

    public function showEditProduct($slug)
    {
        // $category = category::where('slug',$slug)->first(); 
        
        // return view('admin.category.edit', compact('category'));
        
    }

    public function updateProduct(Request $request, $slug)
    {
        // $category = category::where('slug',$slug)->first(); 
        // $category->name = $request->cateName; 
        // $category->slug = Str::slug($request->cateName);
        // $category->save();

        // return redirect()->route('show-category'); 

    }

    public function deleteProduct($slug)
    {
        // $category = category::where('slug',$slug)->first(); 
        // $category->delete(); 

        // return redirect()->route('show-category'); 
    }

}