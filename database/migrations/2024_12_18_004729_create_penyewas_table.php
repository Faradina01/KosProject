<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->id('id_penyewa');
            $table->string('nama_penyewa', 100);
            $table->string('nomor_hp', 20);
            $table->text('alamat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_berakhir');
            $table->unsignedBigInteger('id_kamar');
            $table->enum('status_penyewa', ['Aktif', 'Selesai'])->default('Aktif');
            $table->timestamps();
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar')->onDelete('cascade');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewas');
    }
};
