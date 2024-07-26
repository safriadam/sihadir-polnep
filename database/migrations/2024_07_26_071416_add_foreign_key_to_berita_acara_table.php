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
        Schema::table('berita_acara', function (Blueprint $table) {
            $table->foreign('id_jdwl')->references('id_jdwl')->on('jadwals')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berita_acara', function (Blueprint $table) {
            Schema::dropIfExists('berita_acara');
        });
    }
};
