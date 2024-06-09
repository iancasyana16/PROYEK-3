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
}
