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
        Schema::create('status_przesylkis', function (Blueprint $table) {
            $table->id('id_statusu_przesylki');
            $table->date('data_dostarczenia')->nullable();
            $table->date('data_zamownienia')->nullable();
            $table->enum('status_realizacji')->nullable();
            $table->timestamps();
        });
        Schema::table('przesylkas', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->default('W trakcie przygotowania')->nullable()->after('user_id');
            $table->foreign('status_id')->references('id_statusu_przesylki')->on('status_przesylkis');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_przesylkis');

        Schema::table('przesylkas', function (Blueprint $table) {
            $table->dropForeign('przesylkas_status_id_foreign');
            $table->dropColumn('status_id');
        });
    }
};
