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
        Schema::table('adres', function (Blueprint $table) {
            $table->unsignedBigInteger('przesylka_id')->nullable()->after('id');
            $table->foreign('przesylka_id')->references('id')->on('przesylkas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adres', function (Blueprint $table) {
            $table->dropForeign('adres_przesylka_id_foreign');
            $table->dropColumn('przesylka_id');
        });
    }
};
