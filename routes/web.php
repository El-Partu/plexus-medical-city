<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
})->name('home');

Route::get('/about-us', function () {
	return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
	return view('contact-us');
})->name('contact-us');
