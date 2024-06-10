<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\instalasiController;
use App\Http\Controllers\klienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layananController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\pageController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('welcome', function () {
    return view('/welcome')->name('welcome');
});

// page
route::get('/home', [pageController::class, 'home']);
route::get('/paket', [pageController::class, 'paket']);
route::get('/about', [pageController::class, 'about']);
route::get('/metode&pembayaran', [pageController::class, 'metodePembayaran']);
route::get('/kebijakan&privasi', [pageController::class, 'kebijakanPrivasi']);
route::get('/promo', [pageController::class, 'promo']);

// login
route::get('/login', [loginController::class, 'login'])->name('login')->middleware('guest');
route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', logoutController::class)->name('logout');

//istalasi
Route::get('/instalasi', [instalasiController::class, 'index']);
Route::post('/dasInstalasi', [instalasiController::class, 'store'])->name('dasInstalasi.store');


//admin
Route::middleware(['auth'])->group(function () {

    //home
    Route::get('/admin', [adminController::class, 'index']);

    //paket
    Route::get('/adminPaket', [adminController::class, 'paket']);
    Route::post('/daspaket', [layananController::class, 'index'])->name('daspaket');
    Route::post('/daspaket/store', [layananController::class, 'store'])->name('daspaket.store');
    Route::get('/daspaket/destroy{id}', [layananController::class, 'destroy'])->name('daspaket.destroy');
    Route::put('/daspaket/update{id}', [layananController::class, 'update'])->name('daspaket.update');

    //klien
    Route::get('/adminKlien', [adminController::class, 'klien']);
    Route::get('/dasklien', [klienController::class, 'index'])->name('dasklien');
    Route::post('/dasklien/store', [klienController::class, 'store'])->name('dasklien.store');
    Route::get('/dasklien/destroy{id}', [klienController::class, 'destroy'])->name('dasklien.destroy');
    Route::put('/dasklien/update{id}', [klienController::class, 'update'])->name('dasklien.update');

    //bill
    Route::get('/adminPembayaran', [adminController::class, 'pembayaran']);

});


