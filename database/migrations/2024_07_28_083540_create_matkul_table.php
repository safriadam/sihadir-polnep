<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateTbMkTable extends Migration
// {
    /**
     * Run the migrations.
     *
    //  * @return void
     */
    // public function up()
    // {
    //     Schema::create('matkul', function (Blueprint $table) {
    //         $table->unsignedBigInteger('id_matkul')->autoIncrement();
    //         $table->string('kode_matkul');
    //         $table->string('nama_matkul');
    //         $table->string('semester');
    //         $table->integer('sks');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
    //  * @return void
     */
//     public function down()
//     {
//         Schema::dropIfExists('matkul');
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
        Schema::create('matkul', function (Blueprint $table) {
            $table->unsignedBigInteger('id_matkul')->autoIncrement();
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->string('semester');
            $table->integer('sks');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul');
    }
};


