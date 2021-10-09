<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MediaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.media.index');
    }

    public function storeMedia(Request $request)
    {
        
        $filename = $request->image->getClientOriginalName(); 
        dd($filename); 
        // $request->image->storeAs('upload', $filename); 
       
    }
}