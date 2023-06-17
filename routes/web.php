<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//lading page
Route::get('/', [UserController::class, 'index']);

//login page
Route::get('/urban/login', [UserController::class, 'login']);

//validation
Route::post('/urban/validate', [UserController::class, 'checkUser']);

//create form
Route::get('/urban/create', [UserController::class, 'create']);

//store data
Route::post('/urban', [UserController::class, 'store']);
