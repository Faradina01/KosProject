<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    /** @use HasFactory<\Database\Factories\KamarFactory> */
    use HasFactory;

    protected $table = 'kamars';

    protected $fillable = [
        'nomor_kamar',
        'jenis_kamar',
        'harga_kamar',
        'status_kamar',
        'deskripsi_kamar',
    ];
}
