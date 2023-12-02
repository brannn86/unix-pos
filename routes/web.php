<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AuthController::class,
    'getLogin'])->name('getLogin');

Route::post('/admin/login',[AuthController::class,
    'postLogin'])->name('postLogin');

Route::get('/admin/dashboard',[ProfileController::class,
    'dashboard'])->name('dashboard');

