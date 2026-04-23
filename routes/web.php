<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DriverController::class, 'index']);

Route::get('/drivers/create', [DriverController::class, 'create']);

Route::post('/drivers', [DriverController::class, 'store']);

Route::delete('/drivers/{driver}', [DriverController::class, 'destroy']);

require __DIR__.'/settings.php';