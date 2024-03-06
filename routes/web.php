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
//welcome stranica
Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);
Route::view("/about",'about');
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
//index is the name of the function to load
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

