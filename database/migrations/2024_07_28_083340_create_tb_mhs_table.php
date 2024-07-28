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
        Schema::create('tb_mhs', function (Blueprint $table) {
            $table->id('id_mhs');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_kls');
            $table->unsignedBigInteger('id_dosen_PA');
            $table->string('nim');
            $table->string('nama');
            $table->string('nama_ortu');
            $table->string('no_hp_ortu');
            $table->string('foto');
            $table->string('no_hp');
            $table->enum('ket_status', ['-', 'sp1', 'sp2', 'sp3', 'do']);
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
