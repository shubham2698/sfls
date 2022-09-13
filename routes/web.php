<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
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
    return view('welcome');
});

Route::get("/course_details",[UserController::class,"index"]);

Route::get('/session', function () {
    return session()->all();
});

Route::get('/contactus', function () {
    return view('contact_us');
});

Route::get("/sendmail",[GoogleController::class,"index"]);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/gallary', function () {
    return view('gallary');
});