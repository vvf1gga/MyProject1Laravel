<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/services', [ServiceController::class, 'showServices'])->name('services');

//Manager
Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');

Route::get('/manager/contracts', [ManagerController::class, 'contracts'])->name('manager.contracts');

Route::get('/manager/incidents', [ManagerController::class, 'incidents'])->name('manager.incidents');

Route::get('/manager/payouts', [ManagerController::class, 'payouts'])->name('manager.payouts');


//Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/contracts', [AdminController::class, 'contracts'])->name('admin.contracts');

Route::get('/admin/incidents', [AdminController::class, 'incidents'])->name('admin.incidents');

Route::get('/admin/payouts', [AdminController::class, 'payouts'])->name('admin.payouts');

Route::get('/admin/repts', [AdminController::class, 'repts'])->name('admin.repts');


Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');