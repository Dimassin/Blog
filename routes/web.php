<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/posts');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('posts', PostController::class)
        ->except(['index', 'show']);
});

Route::resource('posts', PostController::class)
    ->only(['index', 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
