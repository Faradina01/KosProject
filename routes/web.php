<?php

use App\Http\Controllers\KamarController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PemilikKosController;

Route::get('/', function () {
    return redirect()->route('login'); // Ganti 'login' dengan nama route yang sesuai
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Ganti dengan rute yang sesuai setelah logout
})->name('logout');

Route::middleware([Authenticate::class])->group(function(){
    Route::resource('pemilik_kos', PemilikKosController::class);
    Route::resource('kamar', KamarController::class);
    Route::resource('penyewa', PenyewaController::class);
    Route::resource('pembayaran', PembayaranController::class);


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');
