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
        Schema::create('tbbarangs', function (Blueprint $table) {
            $table->id('no');
            $table->string('namabarang');
            $table->integer('harga');
            $table->integer('stok');
            $table->enum('kategori', ['Pakaian Wanita','Pakaian Pria','Tas Wanita','Tas Pria','Sepatu Wanita','Sepatu Pria','Aksesoris']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbbarangs');
    }
};
