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
        Schema::create('pemilik_kos', function (Blueprint $table) {
            $table->id('id_pemilik'); // Primary Key
            $table->string('nama_pemilik', 100);
            $table->string('kontak_pemilik', 20);
            $table->text('alamat');
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_kos');
    }
};
