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
        return view('admin.media.index2');
    }

    public function storeMedia(Request $request)
    {
        $input = $request->all(); 
        $filename = time() . "-" . $request->image->getClientOriginalName(); 
        $destinationPath = 'public/upload';

        $url = $request->image->storeAs($destinationPath, $filename); 
        dd($input);
        
        $media = new Media(); 
        $media->filename =  $filename; 
        $media->url = $url ;

    

        return redirect()->back();
    }
}