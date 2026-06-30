<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes SkySoft
|--------------------------------------------------------------------------
| Landing Page + Scroll Section (UI Project)
*/

Route::view('/', 'pages.hero')->name('home');

/*
| OPTIONAL (aktifkan kalau nanti mau multi page)
|
| Route::view('/about', 'pages.about')->name('about');
| Route::view('/services', 'pages.services')->name('services');
| Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
| Route::view('/team', 'pages.team')->name('team');
| Route::view('/contact', 'pages.contact')->name('contact');
|
*/