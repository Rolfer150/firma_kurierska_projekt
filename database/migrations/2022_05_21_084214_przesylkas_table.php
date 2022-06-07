<?php

use App\Enums\Status;
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
            $table->enum('status_przesylki', Status::STATUSTYPES)->default('przygotowywanie');
            $table->string('imie_odbiorca', 255);
            $table->string('nazwisko_odbiorca', 255);
            $table->string('telefon_odbiorca', 9);
            $table->string('email_odbiorca', 255);
            $table->string('miasto_odbiorca', 255);
            $table->string('ulica_odbiorca', 255);
            $table->string('numer_domu_odbiorca', 5);
            $table->string('numer_mieszkania_odbiorca', 5)->nullable();
            $table->string('kod_pocztowy_odbiorca', 6);
            $table->date('data_dostarczenia')->nullable();
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
