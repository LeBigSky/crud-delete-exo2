<?php

use App\Http\Controllers\VoitureController;
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


Route::post('/store/vehicule', [VoitureController::class, 'store'])->name('store.vehicule');

Route::get('/', [VoitureController::class, 'home'])->name('home');
Route::delete('/delete/{id}', [VoitureController::class, 'delete']);