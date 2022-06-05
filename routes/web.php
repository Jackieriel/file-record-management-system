<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//***************************Backend routes**************************************//
//Notice board routes

Route::get('/', [App\Http\Controllers\FileController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/community/edit/{slug}', [App\Http\Controllers\HomeController::class, 'manageCommunity'])->name('community.edit');
