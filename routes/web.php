<?php

use Illuminate\Support\Facades\Log;
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

Route::get('/tenyear', function () {
    return view('tenyear');
});

Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/awards', function () {
    return view('awards');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contactus', function(){
    return view('contactus');
});

Route::post('/contactus', 'ContactController@store');
