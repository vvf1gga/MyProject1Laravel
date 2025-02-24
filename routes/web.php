<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/manager', [ManagerController::class, 'index'])->name('manager');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/services', [ServiceController::class, 'showServices']);

Route::get('/services', [ServiceController::class, 'showServices']);

