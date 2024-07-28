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
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->biginteger('id_staff');
            $table->varchar('nama');
            $table->char('no_induk');
            $table->varchar('pwd');
            $table->varchar('no_hp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_admin');
    }
};
