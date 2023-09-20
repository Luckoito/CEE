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

Route::view('/','pages/login')->name('login');
Route::view('/loginHelp','pages/loginHelp')->name('loginHelp');
Route::view('/testNotify','components/toast')->name('loginHelp');

Route::get('/newUser',[RegisterController::class, 'create'])->name('newUser');
Route::post('/newUser/store', [RegisterController::class, 'store'])->name('newUserStore');