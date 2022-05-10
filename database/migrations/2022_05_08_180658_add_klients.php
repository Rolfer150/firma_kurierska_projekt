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
    /*
    public function up()
    {
        Schema::create('klients', function (Blueprint $table) {
            $table->id('id_klienta');
            $table->string('imie_klienta');
            $table->string('nazwisko_klienta');
            $table->integer('nr_tel_klienta');
            $table->string('email_klienta')->unique();
            $table->timestamp('email_verified_at_klient')->nullable();
            $table->string('haslo_klient');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*
    public function down()
    {
        Schema::dropIfExists('klients');
    }
    */
};
