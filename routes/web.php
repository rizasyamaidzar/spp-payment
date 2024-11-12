<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Operator\BerandaOperator;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaliController;

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
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    Route::get('/beranda', [BerandaOperator::class, 'index'])->name('operator.beranda');
    Route::get('/user', [UserController::class, 'index'])->name('operator.user');
    Route::post('/user', [UserController::class, 'store'])->name('operator.user.store');
    Route::post('/user/update', [UserController::class, 'update'])->name('operator.user.update');
    Route::post('/user/delete', [UserController::class, 'delete'])->name('operator.user.delete');

    // wali
    Route::get('/wali', [WaliController::class, 'index'])->name('operator.wali');
    Route::post('/wali', [WaliController::class, 'store'])->name('operator.wali.store');
    Route::post('/wali/update', [WaliController::class, 'update'])->name('operator.wali.update');
    Route::post('/wali/delete', [WaliController::class, 'delete'])->name('operator.wali.delete');
});
Route::prefix('wali')->middleware(['auth', 'auth.wali'])->group(function () {
    Route::get('beranda', [BerandaOperator::class, 'index'])->name('wali.beranda');
});
Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [BerandaOperator::class, 'index'])->name('admin.beranda');
});
