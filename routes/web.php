<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
});

Route::get('/jobs/create', [JobController::class, 'create']);

Route::get('/products', function () {
    return view('components.products');
});

Route::get('/services', function () {
    return view('components.services');
});
