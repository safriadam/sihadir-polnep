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
        Schema::create('users', function (Blueprint $table) {
            // $table->integer('ID');
            // $table->string('name');
            // $table->string('username');
            // $table->string('password');
            // $table->integer('role');
            // $table->timestamps();


            // alternate columns
            $table->id();
            $table->integer('role');
            $table->string('name');
            $table->string('username');
            $table->string('nomor_induk');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
