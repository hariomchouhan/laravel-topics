<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request) {
        $fileName = time()."-hariom.".$request->file('image')->getClientOriginalExtension();
        
        echo $request->file("image")->storeAs("uploads", $fileName);
    }
}
