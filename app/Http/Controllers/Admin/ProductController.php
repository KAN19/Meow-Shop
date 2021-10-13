<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        return view('admin.product.create');
        
    }
    
    public function storeProduc(Request $request)
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

        // return redirect()->route('show-category'); 
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