<?php

use Illuminate\Support\Facades\Route;

// import Auth
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth', 'role:admin');

Route::get('/user', function () {
    return view('user');
})->middleware('auth', 'role:user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
