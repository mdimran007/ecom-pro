<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pos', [PosController::class, 'pos'])->name('pos');
