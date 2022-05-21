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
        Schema::create('rodzaj_dostawies', function (Blueprint $table) {
            $table->id();
            $table->string('dostawa');
            $table->timestamps();
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('dostawa_id')->nullable()->after('platnosc_id');
            $table->foreign('dostawa_id')->references('id')->on('rodzaj_dostawies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rodzaj_dostawies');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_dostawa_id_foreign');
            $table->dropColumn('dostawa_id');
        });
    }
};
