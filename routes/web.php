<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('produk', [LandingController::class, 'produk']);
Route::get('produk/{id}', [LandingController::class, 'produkDetail']);
Route::get('profile', [LandingController::class, 'profile']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('admin')->group(function () {
        Route::resource('produk', ProdukController::class);
    });
});
