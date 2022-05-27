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
        Schema::create('wielkosc_paczkis', function (Blueprint $table) {
            $table->id();
            $table->string('wielkosc');
            $table->decimal('cena');
            $table->timestamps();
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('wielkosc_id')->nullable()->after('paczkomat_id');
            $table->foreign('wielkosc_id')->references('id')->on('wielkosc_paczkis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wielkosc_paczkis');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_wielkosc_id_foreign');
            $table->dropColumn('wielkosc_id');
        });
    }
};
