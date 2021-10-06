<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function showCategory()
    {
        return view('admin.category.list');
    }

    public function showCreateCategory()
    {
        
    }
    
    public function storeCategory(Request $request)
    {
        
    }

    public function showEditCategory($id)
    {
        
    }

    public function updateCategory(Request $request, $id)
    {
        
    }

    public function deleteCategory($id)
    {
        
    }
   
}