<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DelayController;
use App\Http\Controllers\LastStartController;
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

Route::get('/', [TrainController::class, 'index'])->name('home');
Route::get('/price', [PriceController::class, 'index'])->name('price');
Route::get('/delay', [DelayController::class, 'index'])->name('delay');
Route::get('/lastStart', [LastStartController::class, 'index'])->name('lastStart');
