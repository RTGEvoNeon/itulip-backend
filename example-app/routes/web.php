<?php

use App\Http\Controllers\SortController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('sorts', SortController::class);

require __DIR__ . '/auth.php';
