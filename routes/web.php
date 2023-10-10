<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SessionController;
use App\Actions\Fortify\CreateNewUser;


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
//Route::view('/testNotify','components/toast')->name('toastTest');

Route::view('/newUser', 'pages.newUser')->name('newUser');
Route::post('/newUser/store', [CreateNewUser::class, 'create'])->name('newUserStore');

Route::view('/home', 'pages.')->name('home');
Route::post('/loginAuth', [SessionController::class, 'login'])->name('loginAuth');

