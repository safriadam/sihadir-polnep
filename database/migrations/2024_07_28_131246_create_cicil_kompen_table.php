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
        Schema::create('cicil_kompen', function (Blueprint $table) {
            $table->integer('id_cicil');
            $table->integer('id_kompen');
            $table->integer('id_tahun_ajar');
            $table->biginteger('id_mhs');
            $table->date('tgl_cicil');
            $table->integer('jlh_jam_konversi');
            $table->string('jenis_kompen');
            $table->enum('status',['1','2','3']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cicil_kompen');
    }
};
