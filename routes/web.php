<?php

use Illuminate\Support\Facades\Route;
 
 
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/contact', function () {
    return view('pages.contact');
});