<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PengelolaController;


// Route::middleware([Authenticate::class])->group(function(){
//     Route::resource('Pengelola', PengelolaController::class);
//     Route::resource('Kamar', KamarController::class);
//     Route::resource('Penyewa', PenyewaController::class);
//     route::resource('Profil',ProfilController::class);

// });

Route::get('/', function () {
    return view('welcome');

});

Route::resource('Pengelola', PengelolaController::class);
    Route::resource('Kamar', KamarController::class);
    Route::resource('Penyewa', PenyewaController::class);
    route::resource('Profil',ProfilController::class);
