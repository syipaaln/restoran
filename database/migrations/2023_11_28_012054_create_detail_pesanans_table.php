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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_pesanan'); // Assuming 'id_pesanan' is a foreign key referencing another table
            $table->unsignedBigInteger('id_menu'); // Assuming 'id_menu' is a foreign key referencing another table
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
