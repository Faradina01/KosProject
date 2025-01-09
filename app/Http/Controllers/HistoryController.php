<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel history
        $history = History::all();

        // Kirim data ke view
        return view('history.index', compact('history'));
    }
}
