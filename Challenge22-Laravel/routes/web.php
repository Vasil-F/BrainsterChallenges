<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', [UsersController::class, 'index'])->name('index');
Route::get('login', [UsersController::class, 'create'])->name('login');
Route::post('store', [UsersController::class, 'store'])->name('store');
Route::get('clear', [UsersController::class, 'clear'])->name('clear');
