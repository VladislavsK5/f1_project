<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DriverController::class, 'index']);

Route::get('/drivers/create', [App\Http\Controllers\DriverController::class, 'create'])->name('create');

Route::post('/drivers', [App\Http\Controllers\DriverController::class, 'store']);

Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit']);

Route::put('/drivers/{driver}', [DriverController::class, 'update']);

Route::delete('/drivers/{driver}', [DriverController::class, 'destroy']);

require __DIR__.'/settings.php';