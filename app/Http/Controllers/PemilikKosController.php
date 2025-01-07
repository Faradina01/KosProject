<?php

namespace App\Http\Controllers;

use App\Models\PemilikKos;
use Illuminate\Http\Request;

class PemilikKosController extends Controller
{
    public function index()
    {
        $pemilikKos = PemilikKos::all();
        return view('pemilik_kos.index', compact('pemilikKos'));
    }

    public function create()
    {
        return view('pemilik_kos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:100',
            'kontak_pemilik' => 'required|string|max:20',
            'alamat' => 'required|string',
            'username' => 'required|string|unique:pemilik_kos|max:50',
            'password' => 'required|string|min:6',
        ]);

        PemilikKos::create([
            'nama_pemilik' => $request->nama_pemilik,
            'kontak_pemilik' => $request->kontak_pemilik,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Enkripsi password
        ]);

        return redirect()->route('pemilik_kos.index')->with('success', 'Pemilik kos berhasil ditambahkan.');
    }

    // Tambahkan metode lain seperti edit, update, dan destroy sesuai kebutuhan
}
