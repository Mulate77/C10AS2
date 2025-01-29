<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return "hello";
});
Route::get('/services', function () {
    return "hello";
});
