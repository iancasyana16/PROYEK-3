<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;

class pageController extends Controller
{
    public function home() {
        $layanan = layanan::all();
        return view('pages.home', compact('layanan'));
    }

    public function paket() {
        $layanan = layanan::all();
        return view('pages.paket', compact('layanan'));
    }

    public function about() {
        $layanan = layanan::all();
        return view('pages.about', compact('layanan'));
    }
    public function metodePembayaran() {
        $layanan = layanan::all();
        return view('pages.metodePembayaran', compact('layanan'));
    }
    public function kebijakanPrivasi() {
        $layanan = layanan::all();
        return view('pages.kebijakanPrivasi', compact('layanan'));
    }
    public function login() {
        $layanan = layanan::all();
        return view('login.login', compact('layanan'));
    }
    public function promo() {
        $layanan = layanan::all();
        return view('pages.promo', compact('layanan'));
    }
}
