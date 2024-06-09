<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class layananController extends Controller
{
    public function index()
    {
        $layanan = layanan::all();
        return view('adminDashboard.paket', compact('layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga_layanan' => 'required',
            'deskripsi_layanan' => 'required',
        ]);

        $layanan = layanan::create($request->all());

        if ($layanan) {
            return redirect()->route('daspaket')->with('success', 'Layanan berhasil ditambahkan');
        } else {
            return redirect()->route('daspaket')->with('error', 'Layanan gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required', /*|string|max:255*/
            'harga_layanan' => 'required',
            'deskripsi_layanan' => 'required',
        ]);

        $layanan = Layanan::find($id);

        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_layanan = $request->harga_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;

        $layanan->save();

        if ($layanan) {
            return redirect()->route('daspaket')->with('success', 'Layanan berhasil diperbarui');
        } else {
            return redirect()->route('daspaket')->with('error', 'Layanan gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        $layanan = layanan::findOrFail($id);
        $layanan->delete();

        if ($layanan) {
            return redirect()->route('daspaket')->with('success', 'Layanan berhasil dihapus');
        } else {
            return redirect()->route('daspaket')->with('error', 'Layanan gagal dihapus');
        }
    }

}
