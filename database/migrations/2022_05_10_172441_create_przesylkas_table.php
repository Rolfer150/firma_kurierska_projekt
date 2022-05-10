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
    public function up()
    {
        Schema::create('przesylkas', function (Blueprint $table) {
            $table->id('id_przesylki');
            $table->string('rodzaj_platnosci');
            $table->decimal('cena');
            $table->string('rodzaj_przesylki');
            $table->date('data_dostarczenia');
            $table->string('miasto');
            $table->string('ulica');
            $table->string('numer_mieszkania');
            $table->string('rozmiar_przesylki');
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
        Schema::dropIfExists('przesylkas');
    }
    */
};
