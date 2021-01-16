<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderInvestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_investasi', function (Blueprint $table) {
            $table->id();
            $table->foreignID("buyer_id")->constrained('users');
            $table->foreignID("product_id")->constrained('investasi');
            $table->integer("jumlah");
            $table->integer("total_harga");
            $table->string("status");
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
        Schema::dropIfExists('order_investasi');
    }
}
