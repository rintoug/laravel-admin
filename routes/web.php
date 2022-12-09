<?php

use Rintoug\LaravelAdmin\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['is-admin','web'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('laravel-admin.posts.login');
    Route::post('/login-post', [AuthController::class, 'loginPost'])->name('laravel-admin.posts.login-post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('laravel-admin.admin.logout');

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('laravel-admin.admin.dashboard');


});


Route::get('/test1', function() {
    return "Hello";
});
