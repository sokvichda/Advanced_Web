<?php

use Illuminate\Support\Facades\Route;

// Home route 
Route::get('/', function () {
    return view('name'); 
});

// Named 
Route::get('/user/{name}', function ($name) {
    return "Hello " . $name;
})->name('user.greet');