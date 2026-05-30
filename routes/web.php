<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/', [DriverController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/drivers/create', [DriverController::class, 'create'])->name('create');
    Route::post('/drivers', [DriverController::class, 'store']);
    Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit']);
    Route::put('/drivers/{driver}', [DriverController::class, 'update']);
    Route::delete('/drivers/{driver}', [DriverController::class, 'destroy']);
});


Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'lv'])) {
        Session::put('locale', $lang);
    }
    return redirect()->back();
})->name('lang.switch');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

require __DIR__.'/settings.php';