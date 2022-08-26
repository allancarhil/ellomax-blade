<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Home
 */

Route::get("/", [HomeController::class, 'index'])->name("home.index");


/**
 * Auth
 */

 Route::get("/login",[AuthController::class,'index'])->name("auth.index");
 Route::get("/logout",[AuthController::class,'logout'])->name("auth.logout");
 Route::get("/recover",[AuthController::class,'recover'])->name("auth.recover");
 Route::post("/me",[AuthController::class,'me'])->name("auth.me");
 Route::post("/login",[AuthController::class,'login'])->name("auth.login");

 /**
  * Dashboard
  */

  Route::prefix("dashboard")->group(function(){
    Route::get("/",[DashboardController::class,'index'])->name("dashboard.index");
  });