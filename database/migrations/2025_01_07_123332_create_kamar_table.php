<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kamar', function (Blueprint $table) {
        $table->id('id_kamar'); // Primary Key
        $table->string('Nama_kamar', 100)->unique();
        $table->string('jenis_kamar', 50);
        $table->integer('harga_kamar');
        $table->enum('status_kamar', ['Tersedia', 'Terisi']);
        $table->text('deskripsi_kamar')->nullable(); // Optional
        $table->timestamps(); // Menambahkan created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
