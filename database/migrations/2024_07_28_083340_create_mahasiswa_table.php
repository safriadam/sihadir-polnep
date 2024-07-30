<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateTbMhsTable extends Migration
// {
    /**
     * Run the migrations.
     *
    //  * @return void
     */
    // public function up()
    // {
    //     Schema::create('mahasiswa', function (Blueprint $table) {
    //         $table->unsignedBigInteger('id_mahasiswa')->autoIncrement();
    //         $table->unsignedBigInteger('user_id');
    //         $table->unsignedInteger('id_kelas');
    //         $table->unsignedBigInteger('id_dosen_PA');
    //         $table->string('nim')->unique();
    //         $table->string('nama');
    //         $table->string('nama_ortu');
    //         $table->string('no_hp_ortu');
    //         $table->string('foto');
    //         $table->string('no_hp');
    //         $table->enum('ket_status', ['-', 'sp1', 'sp2', 'sp3', 'do',])->default('-');
    //         $table->timestamps('created_at');
    //         $table->timestamp('updated_at');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
//     public function down()
//     {
//         Schema::dropIfExists('mahasiswa');
//     }
// }




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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mahasiswa')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('id_kelas');
            $table->unsignedBigInteger('id_dosen_PA');
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('nama_ortu');
            $table->string('no_hp_ortu');
            $table->string('foto');
            $table->string('no_hp');
            $table->enum('ket_status', ['-', 'sp1', 'sp2', 'sp3', 'do',])->default('-');
            // $table->timestamps('created_at');
            // $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};

