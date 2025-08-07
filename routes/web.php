<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.show');
Route::get('profile/username', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('login', [App\Http\Controllers\AuthLoginController::class,'login'])->name('login');
Route::get('register', [App\Http\Controllers\AuthRegisterController::class,'register'])->name('register');
Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
