<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\HomeController;
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//se define el metodo que se va a utilizar, con any se recibe cualquier método
Route::get('/',[HomeController::class, 'index'])->name('/');

use App\Http\Controllers\DashboardController;
Route::get("/dashboard", [DashboardController::class, 'index'])->name('/dashboard');

use App\Http\Controllers\ExpenseReportController;
Route::resource('/expense_reports', ExpenseReportController::class);
