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
        Schema::table('jadwals', function (Blueprint $table) {
            $table->foreign('id_mk')->references('id_mk')->on('matkuls')->onDelete('cascade');
            $table->foreign('id_kls')->references('id_kls')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jadwals', function (Blueprint $table) {
            //
            $table->dropForeign(['id_mk']);
            $table->dropForeign(['id_kls']);
        });
    }
};
