<?php

//use Rintoug\Admin\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Route::get('/admin', [AuthController::class, 'index'])->name('rintoug.admin.posts.index');

Route::get('/test1', function() {
    return "Hello";
});
