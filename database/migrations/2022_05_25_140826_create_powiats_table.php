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
        Schema::create('powiats', function (Blueprint $table) {
            $table->id();
            $table->string('powiat');
            $table->timestamps();
        });

        Schema::table('paczkomats', function (Blueprint $table) {
            $table->unsignedBigInteger('powiat_id')->nullable()->after('id');
            $table->foreign('powiat_id')->references('id')->on('powiats');
        });
        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('powiat_id')->nullable()->after('id');
            $table->foreign('powiat_id')->references('id')->on('powiats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('powiats');

        Schema::table('paczkomats', function (Blueprint $table) {
            $table->dropForeign('paczkomats_powiat_id_foreign');
            $table->dropColumn('powiat_id');
        });

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_powiat_id_foreign');
            $table->dropColumn('powiat_id');
        });
    }
};
