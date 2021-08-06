<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('product_user_id');
            $table->integer('product_unicode')->comment('Stok Numarası');
            $table->string('product_slug');
            $table->string('product_title');
            $table->longText('product_description');
            $table->integer('product_order')->comment('Ürün Sırası');
            $table->enum('product_status', ['a', 'p', 't'])->comment('Aktif=a, Pasif=p, Çöpte=t');
            $table->bigInteger('product_prc')->comment('Ürün Fiyatı');
            $table->tinyInteger('product_cid')->comment('Ürün Kur Bilgisi (1 : TL, 2 : Dolar, 3 : Euro)');
            $table->foreign('product_category_id')
                  ->references('category_id')
                  ->on('categories');
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
        Schema::dropIfExists('products');
    }
}
