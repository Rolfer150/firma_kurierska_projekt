<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dane_przesylkis', function (Blueprint $table) {
            $table->id('id_danych_przesylki');
            $table->float('dlugosc');
            $table->boolean('produkt_dostepny_w_magazynie');
            $table->string('rodzaj_produktu');
            $table->float('szerokosc');
            $table->float('waga');
            $table->float('wysokosc');
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
        Schema::dropIfExists('dane_przesylkis');
    }
};
