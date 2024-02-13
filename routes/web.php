<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login/authenticate', [UserController::class, 'loginAuthenticate']);
Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register/new', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);