<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
})->name('login');
