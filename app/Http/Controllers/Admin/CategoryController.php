<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function showCategory()
    {
        $listCates = category::all(); 

        return view('admin.category.list', compact('listCates'));
    }

    public function showCreateCategory()
    {
        return view('admin.category.create');
        
    }
    
    public function storeCategory(Request $request)
    {
        $request->validate([
            'cateName' => 'required|min:4'
        ], [
            'cateName.required' => 'Vui long khong bo trong',
            'cateName.min' => 'Vui lòng nhập nhiều hơn xíu'
        ]); 
        $category = new category(); 
        $category->name = $request->cateName; 
        $category->slug = $request->cateSlug;
        $category->save();

        return redirect()->route('show-category'); 
    }

    public function showEditCategory($id)
    {
        $category = category::find($id); 

        return view('admin.category.edit', compact('category'));
        
    }

    public function updateCategory(Request $request, $id)
    {
        $category = category::find($id); 
        $category->name = $request->cateName; 
        $category->slug = $request->cateSlug;
        $category->save();

        return redirect()->route('show-category'); 

    }

    public function deleteCategory($id)
    {
        
    }
   
}