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
        Schema::create('paczkomats', function (Blueprint $table) {
            $table->id();
            $table->double('lat', 9, 6);
            $table->double('lng', 9, 6);
            $table->string('miasto_paczkomat');
            $table->integer('numer_paczkomat');
            $table->string('nazwa_paczkomat');
            $table->string('haslo');
            $table->integer('numer_ulicy_paczkomat');
            $table->string('ulica_paczkomat');
            $table->string('kod_pocztowy_paczkomat');
            $table->string('haslo_paczkomat');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('paczkomat_id')->nullable()->after('dostawa_id');
            $table->foreign('paczkomat_id')->references('id')->on('paczkomats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paczkomats');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_paczkomat_id_foreign');
            $table->dropColumn('paczkomat_id');
        });
    }
};
