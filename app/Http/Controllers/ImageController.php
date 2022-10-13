<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    //
    public function upload(Request $request) {
        $fileName = $request->file('file')->getClientOriginalName();
        $img = Image::make($request->file('file')->getRealPath())->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
        });
       
        $img->save(storage_path("app/public/uploads/$fileName"));
        
        return response()->json(['location'=>"/storage/uploads/$fileName"]);
    }
}
