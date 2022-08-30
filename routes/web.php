<?php

use App\Models\Product;
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

Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('allproduct');
Route::post('/Create',[\App\Http\Controllers\ProductController::class,'store'])->name('createPro');
Route::get('/Create',[\App\Http\Controllers\ProductController::class,'show'])->name('createPro2');
Route::post('/CreateCategory2',[\App\Http\Controllers\CategoryController::class,'store'])->name('createCate');
Route::get('/CreateCategory2',[\App\Http\Controllers\CategoryController::class,'show'])->name('createCate2');
Route::get('category/{id}',[\App\Http\Controllers\CategoryController::class,'index'])->name('category');
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'create'])->name('regster_c')->middleware('guest');
Route::post('/register1',[\App\Http\Controllers\RegisterController::class,'store'])->name('regster_s')->middleware('guest');
Route::get('/Login1',[\App\Http\Controllers\SessionController::class,'create'])->name('Login_c')->middleware('guest');
Route::post('/Login2',[\App\Http\Controllers\SessionController::class,'store'])->name('Login_s')->middleware('guest');
Route::get('/logout',[\App\Http\Controllers\SessionController::class,'destroy'])->middleware('auth');

