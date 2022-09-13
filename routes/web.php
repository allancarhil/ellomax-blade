<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pages\SellController;
use App\Http\Controllers\home\HomeController;
use App\Http\Middleware\IsLoggedMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * Home
 */

Route::get("/", [HomeController::class, 'index'])->name("home.index");


/**
 * Auth
 */

Route::get("/login", [AuthController::class, 'index'])->name("auth.index");
Route::get("/logout", [AuthController::class, 'logout'])->name("auth.logout");

Route::get("/register", [AuthController::class, 'register'])->name("auth.form.register");
Route::post("/register", [AuthController::class, 'createAccount'])->name("auth.action.register");
Route::post("/efetuar-login", [AuthController::class, 'login'])->name("auth.login");

Route::get("/recover", [AuthController::class, 'recover'])->name("auth.form.recovery");
Route::post("/send-recover", [AuthController::class, 'sendRecover'])->name("auth.email.action.recovery");
Route::get("/form-recover/{token}", [AuthController::class, 'formRecover'])->name("auth.form.new.password");
Route::post("/update-password", [AuthController::class, 'updatePass'])->name("auth.action.new.password");


Route::post("/me", [AuthController::class, 'me'])->name("auth.me");
/**
 * Rotas de páginas de formulário
 */

Route::get("/sell", [SellController::class, 'index'])->name("pages.form.sell");
Route::post("/make-sell", [SellController::class, 'saveSell'])->name("pages.action.sell");

/**
 * Dashboard
 */

// Route::prefix("dashboard")->group(function(){
//   Route::get("/",[DashboardController::class,'index'])->name("dashboard.index");
// });

Route::group(['prefix' => 'dashboard', 'middleware' => ['IsLogged']], function () {
  Route::get("/", [DashboardController::class, 'index'])->name("dashboard.index");
});

//Product route

Route::post('/simple-search',[HomeController::class,'simpleSearch'])->name("home.action.simpleSearch");
Route::get('/company/{id}',[HomeController::class,'showCompanyPage'])->name("show.company.page");




//About Route

Route::get('/aboutus',[HomeController::class,'showAboutUsPage'])->name("show.aboutus.page");

//Contact Route

Route::get('/contact',[HomeController::class,'showContactPage'])->name("show.contact.page");

//Be one Route
Route::get('/be-one-of-us',[HomeController::class,'showBeOnePage'])->name("show.beone.page");