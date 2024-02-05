<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Models\Customer;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MyFolder\SingleActionController;
use App\Http\Controllers\MyFolder\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/hariom', function () {
    return view('hariom');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function ($name = null) {
    $data = compact('name');
    return view('Contact')->with($data);
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);


Route::group(['prefix' => '/customer'], function () {
    Route::get('/create', [CustomerController::class, 'index'])->name('customer.create');
    Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
    Route::get('/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('/view', [CustomerController::class, 'view'])->name('customer.view');
    Route::get('/trash', [CustomerController::class, 'trash'])->name('customer.trash');
    Route::post('/', [CustomerController::class, 'store']);
});

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [UploadController::class, 'upload']);

Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Hariom Chouhan');
    $request->session()->put('user_id', '123');
    $request->session()->flash('status', 'Success');
    return redirect('get-all-session');
});

Route::get('destroy-seession', function () {
    session()->forget('name');
    session()->forget('user_id');
    return redirect('get-all-session');
});

Route::get('/{lang?}', function ($lang = null) {
    App::setLocale($lang);
    return view('home');
});


// Route::get('/customer', function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

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