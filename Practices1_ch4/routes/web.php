<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome";
});

Route::get('/about', function () {
    return "About Page: Hello, this is E-com page";
});

Route::get('/contact', function () {
    return "Contact Page";
});
