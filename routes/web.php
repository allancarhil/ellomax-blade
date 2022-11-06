<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pages\SellController;
use App\Http\Controllers\home\HomeController;
use App\Http\Middleware\IsLoggedMiddleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/perfil',[DashboardController::class,'showProfile'])->name('dashboard.form.perfil');
Route::put('/perfil/{id}',[DashboardController::class,'editProfile'])->name('dashboard.action.perfil');
Route::get('/minhas-empresas',[DashboardController::class,'showMyCompanies'])->name('dashboard.show.my.companies');
});

//Product route
Route::any('/simple-search/{occupation?}', [HomeController::class, 'simpleSearch'])->name("home.action.simple.search");
Route::post('/advanced-search', [HomeController::class, 'advancedSearch'])->name("home.action.advanced.search");
Route::get('/company/{id}', [HomeController::class, 'showCompanyPage'])->name("show.company.page");




//About Route
Route::get('/aboutus', [HomeController::class, 'showAboutUsPage'])->name("show.aboutus.page");

//prebuy
Route::get('/prebuy', [HomeController::class, 'showPreBuyPage'])->name("show.prebuy.page");

//presell
Route::get('/presell', [HomeController::class, 'showPreSellPage'])->name("show.presell.page");



//Contact Route
Route::get('/contact', [HomeController::class, 'showContactPage'])->name("show.contact.page");

//Be one Route
Route::get('/be-one-of-us', [HomeController::class, 'showBeOnePage'])->name("show.beone.page");

//Gera hash
Route::get('/gerahash', function () {
  echo Illuminate\Support\Facades\Hash::make('123');
});
