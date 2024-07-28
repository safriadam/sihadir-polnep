<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKompenMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kompen_mhs', function (Blueprint $table) {
            $table->id('id_kompen');
            $table->unsignedBigInteger('id_mk');
            $table->unsignedBigInteger('id_tahun_ajar');
            $table->unsignedBigInteger('id_mhs');
            $table->integer('jumlah_kompen');
            $table->string('keterangan');
            $table->date('tgl_alpha');
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
        Schema::dropIfExists('tb_kompen_mhs');
    }
}
