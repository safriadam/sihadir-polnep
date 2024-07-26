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
            $table->bigInterger('id');
            $table->bigInteger('id_revisi_presensi');
            $table->integer('tgl_revisi');
            $table->enum('status',['A','I','S']);
            $table->varchar('bukti_revisi');
            $table->date('created_at');
            $table->timestamps();
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
