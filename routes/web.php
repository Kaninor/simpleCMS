<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get("/", [PagesController::class, 'home']);
Route::get("/welcome", [PagesController::class, 'welcome']);
Route::get("/login", [PagesController::class, 'login']);
Route::get("/register", [PagesController::class, 'register']);
Route::get("/forgotpassword", [PagesController::class, 'forgetPassword']);
Route::get("/blank", [PagesController::class, 'blank']);
Route::get("/tables", [PagesController::class, 'tables']);
Route::get("/charts", [PagesController::class, 'charts']);

//Route::post("/tables", [PagesController::class, 'tablespost']);
