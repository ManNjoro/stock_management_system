<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('/products', function() {
//     return view('products');
// });

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login/authenticate', [UserController::class, 'loginAuthenticate']);
Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register/new', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/products', [ProductController::class, 'index'])->name('product.index'); // name of the route
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');