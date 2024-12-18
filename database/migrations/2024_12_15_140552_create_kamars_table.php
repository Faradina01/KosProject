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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id('id_kamar');
            $table->string('nomor_kamar', 10)->unique();
            $table->string('jenis_kamar', 50);
            $table->decimal('harga_kamar', 10, 2);
            $table->enum('status_kamar', ['Tersedia', 'Terisi'])->default('Tersedia');
            $table->text('deskripsi_kamar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
