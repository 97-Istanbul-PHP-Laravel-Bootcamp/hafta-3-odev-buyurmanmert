<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_uname');
            $table->string('user_pass');
            $table->string('user_mail')->unique();
            $table->integer('user_mpno')->comment('Telefon Numarası');
            $table->string('user_fname')->comment('Adı');
            $table->string('user_lname')->comment('Soyadı');
            $table->enum('user_status', ['a', 'p', 't'])->comment('Aktif=a, Pasif=p, Çöpte=t');
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
        Schema::dropIfExists('users');
    }
}
