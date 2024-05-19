<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('/add', [ProductController::class, 'add'])->name('add');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
});
