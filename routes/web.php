<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login']);
Route::post('/login/proses', [LoginController::class, 'loginProses']);
