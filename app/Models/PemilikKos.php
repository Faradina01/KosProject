<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikKos extends Model
{
    use HasFactory;

    protected $table = 'pemilik_kos'; // Nama tabel

    protected $fillable = [
        'nama_pemilik',
        'kontak_pemilik',
        'alamat',
        'username',
        'password',
    ];
}
