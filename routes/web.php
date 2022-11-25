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

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/shop', function () {
    return view('shop.index');
});

// route to software-development-service-page
Route::get('/software-development', function () {
    return view('services.software-dev');
});
