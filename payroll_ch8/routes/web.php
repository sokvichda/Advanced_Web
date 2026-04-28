<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayrollController;

Route::resource('payroll', PayrollController::class);
