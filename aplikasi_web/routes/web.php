<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\klienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layananController;
use App\Http\Controllers\pageController;

route::get('/home', [pageController::class, 'home']);
route::get('/paket', [pageController::class, 'paket']);

// Route::view('/home', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/metode&pembayaran', 'pages.metodePembayaran');
Route::view('/kebijakan&privasi', 'pages.kebijakanPrivasi');
// Route::view('/paket', 'pages.paket');
Route::view('/promo', 'pages.promo');
Route::view('/login', 'login.login');


Route::get('/daspaket', [layananController::class, 'index'])->name('daspaket');
Route::post('/daspaket/store', [layananController::class, 'store'])->name('daspaket.store');
Route::get('/daspaket/destroy{id}', [layananController::class, 'destroy'])->name('daspaket.destroy');
Route::put('/daspaket/update{id}', [layananController::class, 'update'])->name('daspaket.update');

Route::get('/dasklien', [klienController::class, 'index'])->name('dasklien');
Route::post('/dasklien/store', [klienController::class, 'store'])->name('dasklien.store');
Route::get('/dasklien/destroy{id}', [klienController::class, 'destroy'])->name('dasklien.destroy');
Route::put('/dasklien/update{id}', [klienController::class, 'update'])->name('dasklien.update');

Route::get('/admin', [adminController::class, 'index']);
Route::get('/adminKlien', [adminController::class, 'klien']);
Route::get('/adminPembayaran', [adminController::class, 'pembayaran']);
Route::get('/adminSetting', [adminController::class, 'setting']);
Route::get('/adminLogout', [adminController::class, 'logout']);
Route::get('/adminPromo', [adminController::class, 'promo']);
Route::get('/adminPaket', [adminController::class, 'paket']);
Route::get('/adminNotif', [adminController::class, 'notif']);
