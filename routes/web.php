<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashController;
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
    return view('login');
})->name('home');
Route::get('/add/user', [AdminController::class, 'sv']);
Route::post('/login', [loginController::class, 'login'])->name('r');
Route::post('/added', [AdminController::class, 'singup'])->name('singup');
Route::get('/dashboard', [DashController::class, 'dashboard'])->name('d');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');