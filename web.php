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
    return view('welcome');
});

Route::get('/registration/extended', function () {
    return view('view_extended');
});

Route::get('/delivery/{product}/{weight}/{cost}', 'controller_delivery@get_delivery');
Route::get('/registration', 'controller_registration@get_registration');
Route::post('/registration/result', 'controller_registration@get_result');


