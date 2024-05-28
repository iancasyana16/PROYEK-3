<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'adminDashboard.index');
Route::view('/dasklien', 'adminDashboard.klien');
Route::view('/daspaket', 'adminDashboard.paket');
Route::view('/daspembayaran', 'adminDashboard.pembayaran');
Route::view('/dassetting', 'adminDashboard.setting');
Route::view('/daslogout', 'adminDashboard.logout');
Route::view('/home', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/metode&pembayaran', 'pages.metodePembayaran');
Route::view('/kebijakan&privasi', 'pages.kebijakanPrivasi');
Route::view('/paket', 'pages.paket');
Route::view('/promo', 'pages.promo');
Route::view('/login', 'login.login');
