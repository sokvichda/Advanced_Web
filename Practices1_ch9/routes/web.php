<?php

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'store']);
