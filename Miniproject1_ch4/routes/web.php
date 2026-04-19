<?php

use Illuminate\Support\Facades\Route;

// List all students
Route::get('/students', function () {
    $students = ['Alice', 'Bob', 'Charlie'];
    return view('students', ['students' => $students]);
})->name('students.list');

// Show specific student
Route::get('/student/{id}', function ($id) {
    $students = ['Alice', 'Bob', 'Charlie'];
    return view('student', ['student' => $students[$id - 1] ?? 'Unknown']);
})->name('student.show');

// Render Blade view with links
Route::get('/me', function () {
    return view('me');
});

