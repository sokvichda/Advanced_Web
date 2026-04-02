<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/Midterm', function () {
    return "Welcome to Laravel Midterm";
});

Route::get('/StudentsController', function () {
    return "This is the Students Controller.";
});
Route::get('/student', function () {
    return "Student Information Page.";
});