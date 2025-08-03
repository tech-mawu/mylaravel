<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return 'This is the About Page';
});

Route::get('/contact', function() {
    return view('contact');
});