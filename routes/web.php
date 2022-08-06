<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');