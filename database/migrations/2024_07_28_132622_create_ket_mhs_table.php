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
        Schema::create('ket_mhs', function (Blueprint $table) {
            $table->biginteger('id_presensi');
            $table->boolean('status_confirm');
            $table->varchar('surat_bukti');
            $table->varchar('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_mhs');
    }
};
