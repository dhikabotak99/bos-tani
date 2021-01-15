<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasi', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->integer('Harga');
            $table->integer('Periode_Kontrak');
            $table->integer('Hasil');
            $table->integer('Periode_Bagi_hasil');
            $table->integer('Unit_Tersisa');
            $table->string('img_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investasi');
    }
}
