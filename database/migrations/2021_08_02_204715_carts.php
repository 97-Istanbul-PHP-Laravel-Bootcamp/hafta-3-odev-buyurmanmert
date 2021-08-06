<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('cart_id');
            $table->unsignedBigInteger('cart_user_id');
            $table->unsignedBigInteger('cart_product_id');
            $table->integer('cart_orid')->comment('Sipariş Numarası');
            $table->integer('cart_code')->comment('Satış Numarası');
            $table->bigInteger('cart_prc')->comment('Satış Fiyatı');
            $table->tinyInteger('cart_cid')->comment('Satış kuru bilgisi ( 1 : TL , 2 : Dolar , 3 : Euro)');
            $table->date('cart_sale_date')->comment('Satış Tarihi');
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
        Schema::dropIfExists('carts');
    }
}
