<?php

namespace App\Http\Controllers\MyFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('about');
    }
}
