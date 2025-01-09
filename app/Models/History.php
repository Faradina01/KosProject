<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history'; // Nama tabel
    protected $primaryKey = 'id_history'; // Nama kolom primary key
    public $incrementing = true; // Jika kolom primary key adalah auto-increment
    protected $fillable = [
        'id_penyewa',
        'nama_penyewa',
        'nomor_hp',
        'alamat',
        'tanggal_masuk',
        'tanggal_berakhir',
        'id_kamar',
        'status_penyewa',
    ];
}
