<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index'])->name('post');
Route::get('/post/details/{id}',[PostController::class, 'show'])->name('showpost');
Route::resource('admin', AdminController::class);
Route::get('/post/delete/{id}/', [AdminController::class, 'destroy'])->name('delete');