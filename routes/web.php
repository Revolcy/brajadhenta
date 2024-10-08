<?php

use Illuminate\Support\Facades\Route;


Route::get('w', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('rules', function () {
    return view('rules');
});

Route::get('contact', function () {
    return view('contact');
});

