<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
})->name('index');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');

Route::get('/products', function () {
    return view('components.products');
});

Route::get('/services', function () {
    return view('components.services');
});
