<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/home', function () {
    return view('page.home');
})->name('home');
Route::get('/about', function () {
    return view('page.about');
})->name('about');
Route::get('/login', function () {
    return view('page.login');
})->name('login');
Route::get('/dept', function () {
    return view('page.dept');
})->name('dept');

Route::get('/shoe', function () {
    return view('page.shoe');
})->name('shoe');
Route::get('/gift', function () {
    return view('gift.dept');
})->name('gift');
Route::get('/flower', function () {
    return view('page.flower');
})->name('flower');
Route::get('/bag', function () {
    return view('page.bag');
})->name('bag');
Route::get('/food', function () {
    return view('food.bag');
})->name('food');

Route::get('/bag', [ProductController::class ,'index'])
->name('product');
Route::get('/flower', [ProductController::class ,'index1'])
->name('product');
Route::get('/food', [ProductController::class ,'index2'])
->name('product');
Route::get('/gift', [ProductController::class ,'index3'])
->name('product');
Route::get('/shoe', [ProductController::class ,'index4'])
->name('product');
