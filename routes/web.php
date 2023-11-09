<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
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
Route::post('produk', [LandingController::class, 'cari'])->name('cari');
Route::get('produk/{id}', [LandingController::class, 'produkDetail']);
Route::get('produk/kategori/{kategori}', [LandingController::class, 'produkKategori']);
Route::get('profile', [LandingController::class, 'profile']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('admin')->group(function () {
        Route::resource('product', ProdukController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('slide', SliderController::class);
        Route::resource('galeri', GaleriController::class);
        Route::get('slide/status/{id}', [SliderController::class, 'status'])->name('slide.aktif');
    });
});
