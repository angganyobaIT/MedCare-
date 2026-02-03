<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardUserController;

Route::get('/', [AccountController::class, 'show_register']);
Route::get('/login', [AccountController::class, 'show_login']);
Route::post('/register/proccess',[AccountController::class, 'register_validate']);
Route::post('/login/proccess',[AccountController::class, 'login_validate']);
Route::get('/dashboard',[DashboardUserController::class, 'show_dashboard_user'])->name('dashboard');
Route::get('/profile',[DashboardUserController::class, 'show_dashboard_user'])->name('dashboard');


