<?php

use Illuminate\Support\Facades\Route;

// basic_routes

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/company', function () {
    return view('company');
});

Route::get('/location', function () {
    return view('locations');
});

Route::get('/anhydrous', function () {
    return view('products.anhydrous');
});

Route::get('/aqueous', function () {
    return view('products.aqueous');
});

// basic_routes_end

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
