<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemilikKosController;

Route::get('/', function () {
    return redirect()->route('login'); // Ganti 'login' dengan nama route yang sesuai
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Ganti dengan rute yang sesuai setelah logout
})->name('logout');

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('pemilik_kos', PemilikKosController::class);
    Route::resource('kamar', KamarController::class);
    Route::resource('penyewa', PenyewaController::class);
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::post('/penyewa/update-tanggal-berakhir/{id}', [PenyewaController::class, 'updateTanggalBerakhir']);
    Route::post('/penyewa/delete-tanggal-berakhir/{id}', [PenyewaController::class, 'deleteTanggalBerakhir']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('success', 'Anda berhasil logout.');
})->name('logout');

