<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/collection', [CollectionController::class, 'index']);
Route::get('/admins', [AdminController::class, 'index']);
Route::get('/admins/detail/{id}', [AdminController::class, 'detail'])->name('admins.detail');
Route::get('/users', [UserController::class, 'index']);