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
        Schema::create('menu', function (Blueprint $table) {
            $table->unsignedBigInteger('id_menu');
            // $table->binary('image');
            $table->string('foto', 200)->default('default.png');
            $table->string('nama_menu');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
