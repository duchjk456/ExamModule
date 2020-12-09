<?php

use App\Http\Controllers\AgenciesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AgenciesController::class,'index'])->name('index');
Route::get('/create', [AgenciesController::class,'formAdd'])->name('formAdd');
Route::post('/search', [AgenciesController::class,'search'])->name('search');
Route::post('/create', [AgenciesController::class,'create'])->name('create');
Route::get('/{id}/delete', [AgenciesController::class,'destroy'])->name('delete');
Route::get('/{id}/edit', [AgenciesController::class,'edit'])->name('edit');
Route::post('/{id}/update', [AgenciesController::class,'update'])->name('update');
