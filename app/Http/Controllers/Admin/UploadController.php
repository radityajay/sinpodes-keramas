<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request){
        $file = $request->file('file');

        $photo = time() . "-" . $file->getClientOriginalName();

        $path = $request->file('file')->storeAs('public/upload/news-image/', $photo);

        return response()->json([
            'success' => true,
            'data' => $photo,
            'message' => null
        ]);
    }
}
