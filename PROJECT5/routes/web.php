<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/faq', [AuthController::class, 'faq'])->name('faq');
Route::get('/index', [AuthController::class, 'index'])->name('index');
Route::get('/offers', [AuthController::class, 'offers'])->name('offers');
Route::get('/brand', [AuthController::class, 'brand'])->name('brand');
Route::get('/checkout', [AuthController::class, 'checkout'])->name('checkout');
Route::get('/index', [AuthController::class, 'index'])->name('index');
Route::get('/shop', [AuthController::class, 'shop'])->name('shop');
Route::get('/tipsNadvice', [AuthController::class, 'tipsNadvice'])->name('tipsNadvice');
Route::get('/a1', [AuthController::class, 'a1'])->name('a1');
Route::get('/a2', [AuthController::class, 'a2'])->name('a2');
Route::get('/a3', [AuthController::class, 'a3'])->name('a3');
