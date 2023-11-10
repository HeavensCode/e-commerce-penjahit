<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasiusers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable();
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
        Schema::dropIfExists('lokasiusers');
    }
}