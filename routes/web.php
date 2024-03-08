<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KuisController;
use App\Http\Controllers\Admin\PertanyaanController;
use Illuminate\Support\Facades\Auth;
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
    return view('homepage/index');
});

Auth::routes();


Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'isAdmin']);
Route::resource('kuis', KuisController::class)->middleware(['auth', 'isAdmin']);
Route::resource('pertanyaan', PertanyaanController::class)->middleware(['auth', 'isAdmin']);



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
