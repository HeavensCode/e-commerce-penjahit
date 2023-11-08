<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable();
            $table->string('nama_toko');
            $table->string("alamat_toko");
            $table->string("no_telp");
            $table->string("email");
            $table->string("kota");
            $table->string("kecamatan");
            $table->string("provinsi");
            $table->integer("kode_pos");
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
        Schema::dropIfExists('tokos');
    }
}
