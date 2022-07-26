<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/user', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/createbooking/{id}', [App\Http\Controllers\CustomerController::class, 'create']);
Route::get('/viewrides', [App\Http\Controllers\CustomerController::class, 'show']);
//Route::get('/booknow', [App\Http\Controllers\CustomerController::class, 'show']);
Route::post('/storebooking', [App\Http\Controllers\CustomerController::class, 'store'])->name('booking.store');
Route::get('/viewbookings', [App\Http\Controllers\CustomerController::class, 'viewbookings']);



Route::get('/vendorpost', [App\Http\Controllers\VendorController::class, 'create']);
Route::post('/vendorstore', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');
Route::get('/vendorrides', [App\Http\Controllers\VendorController::class, 'show']);
Route::get('/myrideboookings', [App\Http\Controllers\VendorController::class, 'ridebookings']);




Route::get('/adminlogin', [App\Http\Controllers\AdminController::class, 'index']);
Route::post('/valid', [App\Http\Controllers\AdminController::class, 'adminvalidation'])->name('validate');
Route::get('/bookings', [App\Http\Controllers\AdminController::class, 'bookings']);
Route::get('/bookings/{id}', [App\Http\Controllers\AdminController::class, 'cancelbooking']);
Route::get('/rides', [App\Http\Controllers\AdminController::class, 'rides']);
Route::get('/deleteride/{id}', [App\Http\Controllers\AdminController::class, 'deleteride']);

//
//Route::get('/editproduct/{id}', [App\Http\Controllers\ProductsController::class, 'edit']);


Route::get('/editrides/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/updateride/{vendor}', [App\Http\Controllers\AdminController::class, 'update'])->name('update.rides');

Route::get('/adminhome', [App\Http\Controllers\AdminController::class, 'adminhome']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
