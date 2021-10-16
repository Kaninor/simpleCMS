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
Route::get("/login", [PagesController::class, 'login']);
Route::get("/register", [PagesController::class, 'register']);
Route::get("/forgotpassword", [PagesController::class, 'forgetPassword']);
Route::get("/404", [PagesController::class, 'notFound']);
Route::get("/blank", [PagesController::class, 'blank']);
Route::get("/tables", [PagesController::class, 'tables']);

Route::get("/cars/{id}", [PagesController::class, 'car']);
Route::post("/cars", [PagesController::class, 'newCar']);
