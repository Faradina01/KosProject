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


    public function store(Request $request)
    {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'nomor_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'tanggal_masuk' => 'required|date',
            'id_kamar' => 'required|exists:kamar,id_kamar',
        ]);

        // Tambah penyewa baru
        $penyewa = Penyewa::create([
            'nama_penyewa' => $request->nama_penyewa,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'id_kamar' => $request->id_kamar,
            'status_penyewa' => 'Aktif', // Default status
        ]);

        // Update status kamar menjadi "Terisi"
        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->status_kamar = 'Terisi';
        $kamar->save();

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil ditambahkan.');
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
            'tanggal_berakhir' => 'nullable|date',
            'id_kamar' => 'required|exists:kamar,id_kamar',
        ]);

        $penyewa = Penyewa::findOrFail($id);
        $data = $request->all();

        // Jika tanggal_berakhir diisi, ubah status menjadi "Selesai"
        if (!is_null($request->tanggal_berakhir)) {
            $data['status_penyewa'] = 'Selesai';
        } else {
            $data['status_penyewa'] = 'Aktif';
        }

        $penyewa->update($data);

        // Update status kamar sesuai status penyewa
        $kamar = $penyewa->kamar;
        if ($kamar) {
            $kamar->status_kamar = $penyewa->status_penyewa === 'Selesai' ? 'Tersedia' : 'Terisi';
            $kamar->save();
        }

        return redirect()->route('penyewa.index')->with('success', 'Data penyewa berhasil diperbarui.');
    }

    public function updateTanggalBerakhir(Request $request, $id)
    {
        $penyewa = Penyewa::findOrFail($id);

        $request->validate([
            'tanggal_berakhir' => 'required|date|after_or_equal:' . $penyewa->tanggal_masuk,
        ], [
            'tanggal_berakhir.after_or_equal' => 'Tanggal berakhir tidak boleh lebih kecil dari tanggal masuk.',
        ]);

        // Update tanggal berakhir dan status penyewa
        $penyewa->tanggal_berakhir = $request->tanggal_berakhir;
        $penyewa->status_penyewa = 'Selesai';
        $penyewa->save();

        // Perbarui status kamar menjadi "Tersedia" jika status penyewa selesai
        $kamar = $penyewa->kamar;
        if ($kamar) {
            $kamar->status_kamar = 'Tersedia';
            $kamar->save();
        }

        session()->flash('tanggal_berakhir_success', 'Tanggal berakhir berhasil diperbarui untuk penyewa ' . $penyewa->nama_penyewa);

        return response()->json(['success' => true]);
    }



    public function deleteTanggalBerakhir(Request $request, $id)
    {
        $penyewa = Penyewa::findOrFail($id);

        // Hapus tanggal berakhir dan ubah status menjadi "Aktif"
        $penyewa->tanggal_berakhir = null;
        $penyewa->status_penyewa = 'Aktif';
        $penyewa->save();

        // Perbarui status kamar menjadi "Terisi"
        $kamar = $penyewa->kamar;
        if ($kamar) {
            $kamar->status_kamar = 'Terisi';
            $kamar->save();
        }

        session()->flash('tanggal_berakhir_success', 'Tanggal berakhir berhasil dihapus untuk penyewa ' . $penyewa->nama_penyewa);

        return response()->json(['success' => true]);
    }



    public function destroy($id)
    {
        // Cari data penyewa berdasarkan ID
        $penyewa = Penyewa::findOrFail($id);

        // Cek apakah tanggal_berakhir kosong
        if (is_null($penyewa->tanggal_berakhir)) {
            // Kembalikan dengan pesan error jika tanggal_berakhir kosong
            return redirect()->route('penyewa.index')->with('error', 'Data tidak dapat dihapus karena tanggal berakhir belum diisi.');
        }

        // Hapus data penyewa jika validasi lolos
        $penyewa->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('penyewa.index')->with('success', 'Data berhasil dihapus.');
    }

}
