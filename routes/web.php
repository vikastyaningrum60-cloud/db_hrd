<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jabatan', [JabatanController::class, 'index']);

Route::get('/all-data', [DashboardController::class, 'index']);