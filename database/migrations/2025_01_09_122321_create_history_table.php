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
        Schema::create('history', function (Blueprint $table) {
            $table->id('id_history'); // Primary Key
            $table->unsignedBigInteger('id_penyewa'); // Foreign Key Reference
            $table->string('nama_penyewa', 100);
            $table->string('nomor_hp', 20);
            $table->text('alamat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_berakhir')->nullable();
            $table->unsignedBigInteger('id_kamar')->nullable(); // Foreign Key Reference
            $table->enum('status_penyewa', ['Aktif', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
};
