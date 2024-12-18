<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    /** @use HasFactory<\Database\Factories\PenyewaFactory> */
    use HasFactory;

    protected $table = 'penyewas';

    protected $fillable = [
        'nama_penyewa',
        'nomor_hp',
        'alamat',
        'tanggal_masuk',
        'tanggal_berakhir',
        'id_kamar',
        'status_penyewa',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
