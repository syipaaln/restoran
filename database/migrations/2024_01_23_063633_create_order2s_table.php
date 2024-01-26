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
        Schema::create('order2s', function (Blueprint $table) {
            $table->id('id_pesan');
            $table->string('nm_pesanan');
            $table->integer('jmlh_pesanan');
            $table->date('tgl_pesanan');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order2s');
    }
};
