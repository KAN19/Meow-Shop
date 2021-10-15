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
        // $listCates = Product::all(); 
        // $counter = 1; 
        return view('admin.product.index');
    }

    public function showCreateProduct()
    {
        $cates = category::orderby('name', 'ASC')->get();
        return view('admin.product.create', compact('cates'));
        
    }
    
    public function storeProduct(Request $request)
    {
        // $request->validate([
        //     'cateName' => 'required|min:4'
        // ], [
        //     'cateName.required' => 'Vui long khong bo trong',
        //     'cateName.min' => 'Vui lòng nhập nhiều hơn xíu'
        // ]); 
        // $category = new category(); 
        // $category->name = $request->cateName; 
        // $category->slug = Str::slug($request->cateName);
        // $category->save();
        // dd($request->prd_category);
        $product = new Product(); 
        $product->name = $request->prd_name; 
        $product->slug = Str::slug($request->prd_name); 
        $product->status = $request->prd_status; 
        $product->category_id = $request->prd_category; 
        $product->price = $request->prd_price; 
        $product->sale_price = $request->prd_sale_price; 
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