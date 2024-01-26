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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->date('tggl_pesanan');
            $table->unsignedBigInteger('id_pelanggan'); // Assuming 'id_pelanggan' is a foreign key referencing another table
            $table->unsignedBigInteger('id_menu'); // Assuming 'id_menu' is a foreign key referencing another table
            $table->integer('jumlah');
            $table->integer('total_harga'); // Corrected 'int' to 'integer'
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
