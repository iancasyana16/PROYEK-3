<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\klien;

class adminController extends Controller
{
    public function index() {

        $layanan = layanan::all();
        $klien = klien::all();

        return view('adminDashboard.index', compact('layanan', 'klien'));
    }

    public function klien() {

        $layanan = layanan::all();
        $klien = klien::all();

        return view('adminDashboard.klien', compact('layanan', 'klien'));
    }

    public function pembayaran() {

        $layanan = layanan::all();

        return view('adminDashboard.pembayaran', compact('layanan'));
    }

    public function promo() {

        $layanan = layanan::all();

        return view('adminDashboard.promo', compact('layanan'));
    }

    public function setting() {

        $layanan = layanan::all();

        return view('adminDashboard.setting', compact('layanan'));
    }

    public function notif() {

        $layanan = layanan::all();

        return view('adminDashboard.notif', compact('layanan'));
    }

    public function logout() {

        $layanan = layanan::all();

        return view('adminDashboard.logout', compact('layanan'));
    }

    public function paket() {

        $layanan = layanan::all();

        return view('adminDashboard.paket', compact('layanan'));
    }
}
