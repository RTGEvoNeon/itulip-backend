<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SortController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('sorts', SortController::class);
Route::resource('orders', OrderController::class);
Route::resource('clients', ClientController::class);

require __DIR__ . '/auth.php';
