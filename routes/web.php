<?php

use Rintoug\LaravelAdmin\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['is-admin','web'])->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login-post', [AuthController::class, 'loginPost'])->name('laravel-admin.posts.login-post');

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('laravel-admin.admin.logout');

        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('laravel-admin.admin.dashboard');

        # Sample routes
        Route::get('/sample-table', [AuthController::class, 'sampleTable'])->name('laravel-admin.admin.sample-table');
        Route::get('/sample-form', [AuthController::class, 'sampleForm'])->name('laravel-admin.admin.sample-form');


    });


});


Route::get('/test1', function() {
    return "Hello";
});
