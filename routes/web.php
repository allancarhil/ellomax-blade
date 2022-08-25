<?php

use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Home
 */

Route::get("/", [HomeController::class, 'index'])->name("home.index");
