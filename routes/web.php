<?php

use Illuminate\Support\Facades\Route;

// Frontend routes
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('category', [App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('category.index');
Route::get('blogs', [App\Http\Controllers\Frontend\PostController::class, 'index'])->name('blog.show');
Route::get('profile/username', [App\Http\Controllers\Frontend\ProfileController::class, 'index'])->name('profile.show');
Route::get('about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

// Authentication routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');

// Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () 
{
    Route::get('dashboard', [App\Http\Controllers\Admin\DashbordController::class, 'index'])->name('dashboard');
    Route::get('profile/me', [App\Http\Controllers\Admin\ProfileController::class, 'me'])->name('profile.me');
    Route::get('profile/edit', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');

    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
});