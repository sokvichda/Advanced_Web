<?php

use Illuminate\Support\Facades\Route;

Route::get('/product/{id?}', function ($id = 100) {
    return "Product ID: " . $id;
})->where('id', '[0-9]+');
