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

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/shop', function () {
    return view('shop.index');
});
Route::get('/gis', function () {
    return view('services.gis');
});




// route to software-development-service-page
Route::get('/software-development', function () {
    return view('services.software-dev');
});

Route::get('/it', function () {
    return view('services.it');
});

Route::get('/sage', function () {
    return view('services.sage');
});

Route::get('/reporting', function () {
    return view('services.reporting');
 });  
Route::get('/payroll-hr', function () {
    return view('services.payroll_HR');
});
