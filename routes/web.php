<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', [AccountController::class, 'show_register']);
Route::get('/login', [AccountController::class, 'show_login']);
Route::post('/register/proccess',[AccountController::class, 'register_validate']);

