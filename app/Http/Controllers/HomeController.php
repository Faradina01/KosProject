<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalKamar = Kamar::count(); // Jumlah total kamar
        $kamarKosong = Kamar::where('status_kamar', 'Tersedia')->count(); // Jumlah kamar kosong

        return view('home', compact('totalKamar', 'kamarKosong'));
    }
}
