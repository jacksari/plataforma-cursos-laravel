<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');



Route::get('/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('user-back.index');


Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category-back.index');




