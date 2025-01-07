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
    Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('id_pembayaran'); // Primary Key
        $table->foreignId('id_penyewa')->constrained('penyewa', 'id_penyewa'); // Pastikan ini benar
        $table->decimal('jumlah_pembayaran', 10, 2);
        $table->date('tanggal_pembayaran');
        $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
        $table->string('periode_pembayaran', 20); // Contoh: Januari 2024
        $table->timestamps(); // Menambahkan created_at dan updated_at
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
