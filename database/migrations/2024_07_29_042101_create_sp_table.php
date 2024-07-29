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
        Schema::create('sp', function (Blueprint $table) {
            $table->integer('id_sp');
            $table->string('id_mhs');
            $table->bigInteger('id_dosen_pa');
            $table->enum('jenis_sp', ['1', '2', '3']);
            $table->string('lamp_sp');
            $table->string('lamp_surat_pernyataan');
            $table->string('lamp_pgl_ortu');
            $table->string('lamp_ba_ortu');
            $table->enum('status', ['1', '2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp');
    }
};