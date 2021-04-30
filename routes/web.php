<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/wm', function () {
    return view('wm');
});

Route::get('/callAction', function () {
    return view('callAction');
});

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/page={page}', 'App\Http\Controllers\MyController@changePage');

Route::get('/check/{order_number}', 'App\Http\Controllers\MyController@checkstatus');

Route::get('/groups/{id}', 'App\Http\Controllers\MyController@viewGroups');

Route::post('/acceptForm', 'App\Http\Controllers\MyController@acceptForm');



