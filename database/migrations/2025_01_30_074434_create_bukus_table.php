<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nama_buku');
            $table->string('harga');
            $table->integer('stock');
            $table->string('cover');
            $table->unsignedBigInteger('id_penerbit');
            //relasi
            $table->foreign('id_penerbit')->references('id')->on('penerbits')->onDelete('cascade');
            $table->date('tanggal_terbit');
            $table->unsignedBigInteger('id_genre');
            //relasi
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
