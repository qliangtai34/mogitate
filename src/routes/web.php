<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProductSeasonController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/book', [AuthorController::class, 'index']);
Route::post('/book', [AuthorController::class, 'store']);
Route::post('/products/{productId}/attach-seasons', [ProductSeasonController::class, 'attachSeasonToProduct']);
Route::post('/products/{productId}/detach-seasons', [ProductSeasonController::class, 'detachSeasonFromProduct']);