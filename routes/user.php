<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', function () {
    return view('user.create');
});
