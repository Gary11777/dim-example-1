<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
});

Route::get('/products', function () {
    return view('components.products');
});
