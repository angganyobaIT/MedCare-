<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account;

Route::get('/', [Account::class, 'show_register']);
Route::get('login', [Account::class, 'show_login']);

