<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Klien;

class KlienController extends Controller
{
    public function index()
    {
        $klien = Klien::all();
        $layanan = Layanan::all();
        return view('adminDashboard.klien', compact('klien', 'layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomorHp' => 'required',
            'alamat' => 'required',
            'paket' => 'required',
        ]);


        $klien = Klien::create($request->all());

        if ($klien) {
            return redirect()->route('dasklien')->with('success', 'Klien berhasil ditambahkan');
        } else {
            return redirect()->route('dasklien')->with('error', 'Klien gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomorHp' => 'required',
            'alamat' => 'required',
            'paket' => 'required',
        ]);

        $klien = Klien::findOrFail($id);
        $klien->update($request->all());

        if ($klien) {
            return redirect()->route('dasklien')->with('success', 'Klien berhasil diperbarui');
        } else {
            return redirect()->route('dasklien')->with('error', 'Klien gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        $klien = Klien::findOrFail($id);
        $klien->delete();

        if ($klien) {
            return redirect()->route('dasklien')->with('success', 'Klien berhasil dihapus');
        } else {
            return redirect()->route('dasklien')->with('error', 'Klien gagal dihapus');
        }
    }

}
