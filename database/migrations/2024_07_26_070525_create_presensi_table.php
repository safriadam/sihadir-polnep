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
        Schema::create('presensi', function (Blueprint $table) {
            // $table->bigIncrements('id_presensi');
            // $table->bigInteger('id_jdwl')->unsigned();
            // $table->bigInteger('id_mhs')->unsigned();
            // $table->bigInteger('id_tahun_ajar')->unsigned();
            // $table->date('tanggal');
            // $table->time('start_kls');
            // $table->time('finish_kls');
            // $table->integer('kehadiran');
            // $table->integer('ketidakhadiran');
            // $table->enum('status', ['A', 'I', 'S']);
            // $table->timestamps();
            
            // $table->foreign('id_jdwl')->references('id_jdwl')->on('jadwals')->onDelete('cascade');
            // $table->foreign('id_mhs')->references('id_mhs')->on('mahasiswas')->onDelete('cascade');
            // $table->foreign('id_tahun_ajar')->references('id_tahun_ajar')->on('logs')->onDelete('cascade');
        
            // alternate columns
            $table->unsignedBigInteger('id_presensi')->autoIncrement();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedInteger('id_tahun_ajar');
            $table->unsignedBigInteger('id_jadwal');
            $table->date('tanggal');
            $table->time('start_kls');
            $table->time('finish_kls')->nullable();
            $table->integer('kehadiran');
            $table->integer('ketidakhadiran');
            $table->enum('status', ['A','I','S'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
