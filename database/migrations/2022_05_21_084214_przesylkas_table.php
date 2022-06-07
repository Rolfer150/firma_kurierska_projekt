<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /*

    /**
     * Run the migrations.
     *
     * @return void
     */

    /*

/*
* Run the migrations.
*
* @return void
*/

    public function up()
    {
        Schema::create('przesylkas', function (Blueprint $table) {
            $table->id();
            $table->string('imie_odbiorca', 255);
            $table->string('nazwisko_odbiorca', 255);
            $table->string('telefon_odbiorca', 9);
            $table->string('email_odbiorca', 255);
            $table->string('miasto_odbiorca', 255);
            $table->string('ulica', 255);
            $table->string('numer_domu', 5);
            $table->string('numer_mieszkania', 5)->nullable();
            $table->date('data_dostarczenia');
            $table->string('kod_pocztowy', 6);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /*

/*
* Reverse the migrations.
*
* @return void
*/


    public function down()
    {
        Schema::dropIfExists('przesylkas');
    }



};
