<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/rooms', 'rooms')->name('rooms');
Route::view('/facilities', 'facilities')->name('facilities');
Route::view('/events', 'events')->name('events');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/offers', 'offers')->name('offers');
Route::view('/contact', 'contact')->name('contact');
Route::view('/book', 'book')->name('book');
