<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('category_title')->comment('Kategori Başlık');
            $table->longText('category_description')->comment('Kategori Açıklama');
            $table->string('category_slug')->comment('URL Adresi');
            $table->enum('category_status', ['a', 'p', 't'])->comment('Aktif=a, Pasif=p, Çöpte=t');
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
        Schema::dropIfExists('categories');
    }
}
