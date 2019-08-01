<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');

            $table->unsignedBigInteger('id_kasir');
            $table->foreign('id_kasir')->references('id')->on('kasirs')->onDelete('cascade');

            $table->integer('jumlah');
            $table->integer('total');
            $table->date('tanggal');
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
        Schema::dropIfExists('penjualans');
    }
}
