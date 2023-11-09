<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_products', function (Blueprint $table) {
            $table->foreignId('id_product')->nullable();
            $table->string('deskripsi');
            $table->integer('rating');
            $table->string('merk');
            $table->string('motif');
            $table->integer('panjang_kain');
            $table->string('seller');
            $table->string('bahan');
            $table->string('size');
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_products');
    }
}