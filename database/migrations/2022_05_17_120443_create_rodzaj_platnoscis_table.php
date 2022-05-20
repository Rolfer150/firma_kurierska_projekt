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
        Schema::create('rodzaj_platnoscis', function (Blueprint $table) {
            $table->id();
            $table->string('platnosc');
            $table->timestamps();
        });
        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('platnosc_id')->nullable()->after('id');
            $table->foreign('platnosc_id')->references('id')->on('rodzaj_platnoscis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rodzaj_platnoscis');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_platnosc_id_foreign');
            $table->dropColumn('platnosc_id');
        });
    }
};
