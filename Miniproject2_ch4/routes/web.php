<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('check.login')->group(function () {

    Route::get('/users', function () {
        return "Admin: User List";
    })->name('admin.users');

    Route::get('/settings', function () {
        return "Admin: Settings Page";
    })->name('admin.settings');

});