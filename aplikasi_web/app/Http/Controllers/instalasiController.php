<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\instalasi;

class instalasiController extends Controller
{
    public function index() {
        $instalasi = instalasi::all();
        return view('pages.paket', compact('instalasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaKlien' => 'required',
            'nomorHp' => 'required',
            'alamat' => 'required',
            'paket' => 'required',
            // 'tgl_instalasi' => 'required'
        ]);

        dd($request->all());

        $instalasi = instalasi::create($request->all());

        if ($instalasi) {
            return redirect()->route('instalasi')->with('success', 'instalasi berhasil ditambahkan');
        } else {
            return redirect()->route('instalasi')->with('error', 'instalasi gagal ditambahkan');
        }
    }

}
