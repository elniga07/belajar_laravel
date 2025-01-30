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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('jumlah');
            $table->date('tanggal_transaksi');
            $table->unsignedBigInteger('id_buku');
            //relasi
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
            $table->unsignedBigInteger('id_pembeli');
            //relasi
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
};
