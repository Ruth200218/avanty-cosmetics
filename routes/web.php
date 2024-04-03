<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
// HOME ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');

// ADMIN ROUTES
Route::get('admin', function () {
    return view('admin.home-admin');
})->name('admin');

//CUSTOMER ROUTES
Route::get('customer', function () {
    return view('customer.home-customer');
})->name('customer');
