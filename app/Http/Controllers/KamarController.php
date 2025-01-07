<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar.index', compact('kamar'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100|unique:kamar',
            'jenis_kamar' => 'required|string|max:50',
            'harga_kamar' => 'required|numeric',
            'status_kamar' => 'required|in:Tersedia,Terisi',
            'deskripsi_kamar' => 'nullable|string',
        ]);

        Kamar::create($request->all());

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kamar' => 'required|string|max:100|unique:kamar,nama_kamar,' . $id . ',id_kamar',
            'jenis_kamar' => 'required|string|max:50',
            'harga_kamar' => 'required|numeric',
            'status_kamar' => 'required|in:Tersedia,Terisi',
            'deskripsi_kamar' => 'nullable|string',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update($request->all());

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);

        if ($kamar->penyewa->count() >= 1) {
            flash('Data tidak bisa dihapus karena sudah terkait dengan data penyewa')->error();
            return back();
        }
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus.');
    }
}
