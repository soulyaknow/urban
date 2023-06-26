<?php

use App\Http\Controllers\ProductController;
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

//view items
Route::get('/urban/item', [UserController::class, 'item']);

//logout 
Route::post('/urban/logout', [UserController::class, 'logout']);

//admin dashboard
Route::get('/admin', [UserController::class, 'users']);

// //show edit form
// Route::get('/admin/{user}/edit', [UserController::class, 'edit']);

//add product
Route::get('/admin/product', [ProductController::class, 'create']);

//store product
Route::post('/admin/add',[ProductController::class, 'store']);

//show edit form
Route::get('/admin/{product}/edit-product', [ProductController::class, 'edit']);

//update submit form
Route::put('/admin/{product}', [ProductController::class, 'update']);

//show delete form
Route::get('/admin/{product}/delete-product', [ProductController::class, 'delete']);

//delete submit form
Route::delete('/admin/{product}/delete', [ProductController::class, 'destroy']);
