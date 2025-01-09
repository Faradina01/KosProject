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

    protected static function booted()
    {
        static::deleting(function ($penyewa) {
            \App\Models\History::create([
                'id_penyewa' => $penyewa->id_penyewa,
                'nama_penyewa' => $penyewa->nama_penyewa,
                'nomor_hp' => $penyewa->nomor_hp,
                'alamat' => $penyewa->alamat,
                'tanggal_masuk' => $penyewa->tanggal_masuk,
                'tanggal_berakhir' => $penyewa->tanggal_berakhir,
                'id_kamar' => $penyewa->id_kamar,
                'status_penyewa' => $penyewa->status_penyewa,
            ]);
        });
    }

}
