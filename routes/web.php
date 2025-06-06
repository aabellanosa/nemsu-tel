<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/rooms', 'coming-soon');
Route::view('/facilities', 'coming-soon');
Route::view('/events', 'coming-soon');
Route::view('/gallery', 'coming-soon');
Route::view('/offers', 'coming-soon');
Route::view('/contact', 'coming-soon');
Route::view('/book', 'coming-soon');
