<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// for login & verify-------
// Route::post('/login', [AuthCon])
