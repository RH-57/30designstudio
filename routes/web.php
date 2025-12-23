<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/about-us', function () {
    return view('website.about-us');
});
Route::get('/portfolio', function () {
    return view('website.portfolio');
});
Route::get('/contact-us', function () {
    return view('website.contact');
});
