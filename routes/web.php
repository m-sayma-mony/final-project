<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/create/category', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/store/category', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::get('/manage/category', [CategoryController::class, 'index'])->name('manage.category');

    Route::get('/create/blog', [BlogController::class, 'create'])->name('create.blog');
    Route::post('/store/blog', [BlogController::class, 'store'])->name('store.blog');
    Route::get('/show/blog/{id}', [BlogController::class, 'show'])->name('show.blog');
    Route::get('/manage/blog', [BlogController::class, 'index'])->name('manage.blog');
});
