<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
	return view('about-us');
})->name('about-us');
