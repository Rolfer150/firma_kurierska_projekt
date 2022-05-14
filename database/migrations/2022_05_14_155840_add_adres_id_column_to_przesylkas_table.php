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
        Schema::create('adres', function (Blueprint $table) {
            $table->id('id_adresu');
            $table->string('miasto');
            $table->string('numer_domu');
            $table->string('numer_mieszkania');
            $table->string('ulica');
            $table->timestamps();
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('adres_id')->nullable()->after('rodzaj_przesylki');
            $table->foreign('adres_id')->references('id_adresu')->on('adres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adres');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_adres_id_foreign');
            $table->dropColumn('adres_id');
        });
    }
};
