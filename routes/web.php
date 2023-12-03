<?php

use App\Http\Controllers\Admin\AdminMgmtController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\MenuMgmtController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\MenuOrderController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/admin/menuorder',[MenuOrderController::class,
    'menuOrder'])->name('menuOrder');

Route::get('/admin/menumanagement',[MenuMgmtController::class,
    'menuMgmt'])->name('menuMgmt');

Route::get('/admin/pendapatan',[IncomeController::class,
    'income'])->name('income');

Route::get('/admin/adminmanagement',[AdminMgmtController::class,
    'adminMgmt'])->name('adminMgmt');