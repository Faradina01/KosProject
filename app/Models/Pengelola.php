<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    /** @use HasFactory<\Database\Factories\PengelolaFactory> */
    use HasFactory;

    protected $table = 'pengelolas';

    protected $fillable = [
        'nama_pemilik',
        'kontak_pemilik',
        'alamat',
        'username',
        'password',
    ];
}
