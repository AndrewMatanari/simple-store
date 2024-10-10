<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [MainController::class, 'main'])->name('products.main');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', MainController::class);
// 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class)->middleware('auth')->except('show');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/', [MainController::class, 'main'])->name('products.main');


