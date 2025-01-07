<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran'; // Nama tabel

    protected $fillable = [
        'id_penyewa',
        'jumlah_pembayaran',
        'tanggal_pembayaran',
        'status_pembayaran',
        'periode_pembayaran',
    ];
}
