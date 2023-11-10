<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelians', function (Blueprint $table) {
            $table->foreignId('id_pembelian')->nullable();
            $table->string('nama_product');
            $table->string('bukti_pembayaran');
            $table->string('jumlah_pembelian');
            $table->integer('total_biaya');
            $table->timestamps();
            $table->foreign('id_pembelian')->references('id')->on('pembelians')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembelians');
    }
}
