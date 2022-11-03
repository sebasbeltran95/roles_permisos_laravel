<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionsController;

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
    return view('home');
})->middleware('auth');

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// login 
Route::get('/login', [SessionsController::class,'create'])
->middleware('guest')
->name('login.index');

Route::post('/login-insertar', [SessionsController::class,'store'])
->name('login.store');

Route::get('/logout', [SessionsController::class,'destroy'])
->middleware('auth')
->name('logout.destroy');
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// registro 
Route::get('/register', [RegistroController::class,'create'])
->middleware('guest')
->name('register.index');
Route::post('/register-insertar', [RegistroController::class,'store'])->name('register.store');
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


