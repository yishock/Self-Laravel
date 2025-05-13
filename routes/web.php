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

Route::get('/DemoVideo', function () {
    return view('DemoVideo');
});

Route::get('/DemoVideo_first', function () {
    return view('DemoVideo_first');
});

Route::get('/DemoVideo_videojs', function () {
    return view('DemoVideo_videojs');
});

Route::get('/DemoVideo_Plyr', function () {
    return view('DemoVideo_Plyr');
});

Route::get('/DemoVideo_mediaelementjs', function () {
    return view('DemoVideo_mediaelementjs');
});


