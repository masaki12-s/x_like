<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::post(uri: '/user/store', action: [UserController::class, 'store'])->name('user.store');

Route::post('/user/delete/{id}', action: [UserController::class, 'delete'])->name('user.delete');
