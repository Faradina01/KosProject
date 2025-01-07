<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewa = Penyewa::with('kamar')->get(); // Memuat relasi kamar
        return view('penyewa.index', compact('penyewa'));
    }



    public function create()
    {
        $kamar = Kamar::all(); // Ambil semua data kamar
        return view('penyewa.create', compact('kamar'));
    }


    public function store(Request $request) {
        $request->validate([
            'nama_penyewa' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'tanggal_masuk' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_masuk', // Pastikan ini ada
            'id_kamar' => 'required',
            'status_penyewa' => 'required',
        ]);


        // Logika untuk menyimpan data penyewa
        // Contoh:
        $penyewa = new Penyewa();
        $penyewa->nama_penyewa = $request->nama_penyewa;
        $penyewa->nomor_hp = $request->nomor_hp;
        $penyewa->alamat = $request->alamat;
        $penyewa->tanggal_masuk = $request->tanggal_masuk;
        $penyewa->tanggal_berakhir = $request->tanggal_berakhir; // Ini bisa null
        $penyewa->id_kamar = $request->id_kamar;
        $penyewa->status_penyewa = $request->status_penyewa;
        $penyewa->save();

        return redirect()->route('penyewa.index')->with('success', 'Data penyewa berhasil disimpan.');
    }

    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        $kamars = Kamar::all(); // Ambil semua kamar

        return view('penyewa.edit', compact('penyewa', 'kamars'));
    }



public function update(Request $request, $id)
{
    $request->validate([
        'nama_penyewa' => 'required|string|max:100',
        'nomor_hp' => 'required|string|max:20',
        'alamat' => 'required|string',
        'tanggal_masuk' => 'required|date',
        'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_masuk',
        'id_kamar' => 'required|exists:kamar,id_kamar',
        'status_penyewa' => 'required|in:Aktif,Selesai',
    ]);

    $penyewa = Penyewa::findOrFail($id);
    $penyewa->update($request->all());

    return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil diperbarui.');
}


    public function destroy($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus.');
    }
}
