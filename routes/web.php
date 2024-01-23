<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Models\Customer;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MyFolder\SingleActionController;
use App\Http\Controllers\MyFolder\ResourceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function ($name = null) { 
    $data = compact('name');
    return view('Contact')->with($data);
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer', function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});





// Route::get('/', [MyFirstController::class, 'index']);
// Route::get('/hariom', [MyFirstController::class, 'hariom']);
// // Route::get('/hariom', 'App\Http\Controllers\MyFirstController@hariom');
// Route::get('/about', SingleActionController::class);
// Route::resource('/photo', ResourceController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hariom', function () {
//     return view('hariom');
// });

// Route::get('/hariom/chouhan/good', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     // <a href="route('admin.home')"> Click Here </a>
//     return "This my url ". $url;
// }));