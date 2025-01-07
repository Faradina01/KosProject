<?php
// App\Models\Kamar.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar'; // Nama tabel
    protected $primaryKey = 'id_kamar'; // Nama kolom primary key
    public $incrementing = true; // Jika kolom primary key adalah auto-increment
    protected $fillable = [
        'nama_kamar',
        'jenis_kamar',
        'harga_kamar',
        'status_kamar',
        'deskripsi_kamar',
    ];

    public function penyewa()
    {
        return $this->hasMany(Penyewa::class, 'id_kamar', 'id_kamar');
    }
}


