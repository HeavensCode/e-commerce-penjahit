<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasukanadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukanadmins', function (Blueprint $table) {

            $table->foreignId('id_pembelian')->nullable();
            $table->integer	("pemasukan");
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
        Schema::dropIfExists('pemasukanadmins');
    }
}
