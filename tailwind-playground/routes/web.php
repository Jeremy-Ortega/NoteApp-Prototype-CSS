<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/main', function() {return view('main-page');});
Route::get('/create', function() {return view('create-page');});
Route::get('/edit', function() {return view('edit-page');});

Route::get('/view', function() {return view('view-page');});
Route::get('/profile', function() {return view('profile-page');});

Route::get('/register', function() {return view('landing-register');});
Route::get('/login', function() {return view('landing-login');});


