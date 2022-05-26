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
        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_adres_id_foreign');
            $table->dropColumn('adres_id');
        });
    }
};
