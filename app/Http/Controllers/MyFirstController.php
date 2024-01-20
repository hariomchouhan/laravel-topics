<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function hariom(){
        return view('hariom');
    }
}
