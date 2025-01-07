<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('penyewa')->get(); // Mengambil data pembayaran beserta penyewa
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $penyewa = Penyewa::all(); // Mengambil semua data penyewa untuk dropdown
        return view('pembayaran.create', compact('penyewa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_penyewa' => 'required|exists:penyewa,id_penyewa',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            'status_pembayaran' => 'required|in:Lunas,Belum Lunas',
            'periode_pembayaran' => 'required|string|max:20',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    // Tambahkan metode lain seperti edit, update, dan destroy sesuai kebutuhan
}
