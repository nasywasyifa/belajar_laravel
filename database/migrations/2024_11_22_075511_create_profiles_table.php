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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', length: 55);
            $table->string('alamat', length: 250);
            $table->integer('no_telpon');
            $table->string('email')->unique();
            $table->integer('facebook');
            $table->integer('twitter');
            $table->integer('linkedin');
            $table->integer('instragram');
            $table->integer('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
