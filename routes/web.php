<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::view('/','login')->name('login');
Route::view('/loginHelp','loginHelp')->name('loginHelp');

Route::get('/novoUsuario',[RegisterController::class, 'create'])->name('novoUsuario');
Route::post('/novoUsuario', [RegisterController::class, 'store']);