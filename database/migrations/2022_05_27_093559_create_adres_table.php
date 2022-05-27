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
            $table->id();
            $table->string('miasto');
            $table->integer('numer_domu');
            $table->integer('numer_mieszkania')->nullable();
            $table->string('ulica');
            $table->timestamps();
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('adres_id')->nullable()->after('cena');
            $table->foreign('adres_id')->references('id')->on('adres')->onDelete('cascade');
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
    }
};
