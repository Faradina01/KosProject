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
    Schema::create('penyewa', function (Blueprint $table) {
        $table->id('id_penyewa'); // Primary Key
        $table->string('nama_penyewa', 100);
        $table->string('nomor_hp', 20);
        $table->text('alamat');
        $table->date('tanggal_masuk');
        $table->date('tanggal_berakhir')->nullable();
        $table->foreignId('id_kamar')->constrained('kamar', 'id_kamar'); // Foreign Key
        $table->enum('status_penyewa', ['Aktif', 'Selesai']);
        $table->timestamps(); // Menambahkan created_at dan updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewa');
    }
};
