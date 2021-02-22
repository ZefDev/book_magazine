<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
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

Route::redirect('/', 'book');
Route::get('/book/fetch_data', [BookController::class, 'fetch_data']);
Route::get('/author/fetch_data', [AuthorController::class, 'fetch_data']);
Route::resource('users', UsersController::class);
Route::resource('book',BookController::class);
Route::resource('author',AuthorController::class);
