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
        Schema::create('dosen', function (Blueprint $table) {
            $table->integer('user_id');
            $table->bigInteger('id_dosen');
            $table->varchar('nidn');
            $table->varchar('nip');
            $table->varchar('nama');
            $table->boolean('is_kaprodi');
            $table->varchar('no_hp');
            $table->varchar('pwd');
            $table->varchar('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
