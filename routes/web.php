<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CaseController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
 
Route::get('/contracts', function () {
    return view('contracts');
})->name('contracts');

Route::get('/incidents', function () {
    return view('incidents');
})->name('incidents');

Route::get('/services', function () {return view('services');});

Route::get('/cases', function () {return view('cases');});

Route::get('/reports', function () {return view('reports');});

Route::get('/createincidents', function () {
    return view('createincidents'); 
});