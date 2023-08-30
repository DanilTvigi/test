<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Маршруты на страницы
Route::get('/', [App\Http\Controllers\RouteController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\RouteController::class, 'about'])->name('about');
Route::get('/basket', [App\Http\Controllers\RouteController::class, 'basket'])->name('basket');
Route::get('/cabinet', [App\Http\Controllers\RouteController::class, 'cabinet'])->name('cabinet');
Route::get('/contacts', [App\Http\Controllers\RouteController::class, 'contacts'])->name('contacts');
Route::get('/decor', [App\Http\Controllers\RouteController::class, 'decor'])->name('decor');
Route::get('/discounts', [App\Http\Controllers\RouteController::class, 'discounts'])->name('discounts');
Route::get('/favorites', [App\Http\Controllers\RouteController::class, 'favorites'])->name('favorites');
Route::get('/manual', [App\Http\Controllers\RouteController::class, 'manual'])->name('manual');
Route::get('/novelties', [App\Http\Controllers\RouteController::class, 'novelties'])->name('novelties');
Route::get('/product', [App\Http\Controllers\RouteController::class, 'product'])->name('product');
Route::get('/stock', [App\Http\Controllers\RouteController::class, 'stock'])->name('stock');
