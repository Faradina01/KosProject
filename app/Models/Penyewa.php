<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $table = 'penyewa'; // Nama tabel
    protected $primaryKey = 'id_penyewa'; // Nama kolom primary key
    public $incrementing = true; // Jika kolom primary key adalah auto-increment
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
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id_kamar');
    }
}
