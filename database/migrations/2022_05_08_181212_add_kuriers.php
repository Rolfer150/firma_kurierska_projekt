<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/*
     * Run the migrations.
     *
     * @return void
*/
    public function up()
    {
        Schema::create('kuriers', function (Blueprint $table) {
            $table->id('id_kuriera');
            $table->string('imie_kuriera');
            $table->string('nazwisko_kuriera');
            $table->integer('nr_tel_kuriera');
            $table->string('email_kuriera')->unique();
            $table->timestamp('email_verified_at_kurier')->nullable();
            $table->string('haslo_kurier');
            $table->rememberToken();
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
        Schema::dropIfExists('kuriers');
    }

};
