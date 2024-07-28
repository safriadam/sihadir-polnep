<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mhs')->autoIncrement();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->Integer('id_kls');
            $table->foreignId('id_dosen_PA')->references('id_dosen')->on('dosen')->onDelete('cascade');
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('nama_ortu');
            $table->string('no_hp_ortu');
            $table->string('foto');
            $table->string('no_hp');
            $table->enum('ket_status', ['-', 'sp1', 'sp2', 'sp3', 'do',])->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mhs');
    }
}
