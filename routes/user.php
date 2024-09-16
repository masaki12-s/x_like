<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/create', function () {
    return view('user.create');
});
