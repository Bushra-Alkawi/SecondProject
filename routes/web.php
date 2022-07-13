<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FirstController;

use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\NewController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
