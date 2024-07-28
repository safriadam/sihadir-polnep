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
        Schema::create('revisi_presensi', function (Blueprint $table) {
            $table->bigInteger('id_revisi_presensi')->autoIncrement();
            $table->foreignId('id_presensi')->references('id_presensi')->on('presensi')->onDelete('cascade');
            $table->integer('tgl_revisi');
            $table->enum('status',['diajukan','menunggu_verif','disetujui'])->nullable();
            $table->string('bukti_revisi');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisi_presensi');
    }
};
