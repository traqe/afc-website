<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\RequestMail;

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


Route::post('/postEmail', function () {
    /*$email = request('email');
    $phone = request('phone');
    $services = request('services');
    $comment = request('comment');*/
    $data = request(['email', 'phone', 'services', 'comment']);
    Mail::to('tnrwatida@gmail.com')->send(new RequestMail($data));

    return redirect()->back()->with('flash', 'Request sent successfully');
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
