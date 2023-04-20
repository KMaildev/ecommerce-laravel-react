<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Admin Route
Route::get('/admin/login', [PageController::class, 'showLogin'])->name('showLogin');
Route::post('submit_login', [PageController::class, 'submitLogin'])->name('submit_login');
Route::post('admin_logout', [PageController::class, 'adminLogout'])->name('admin_logout');


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::resource('category', CategoryController::class);
Route::resource('color', ColorController::class);
Route::resource('brand', BrandController::class);
