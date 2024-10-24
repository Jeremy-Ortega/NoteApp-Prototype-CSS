<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function() {return view('main-page');});
Route::get('/create', function() {return view('create-page');});
Route::get('/edit', function() {return view('edit-page');});
Route::get('/landing', function() {return view('landing-page');});


