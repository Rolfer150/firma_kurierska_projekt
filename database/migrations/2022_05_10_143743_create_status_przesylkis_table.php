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
            $table->date('data_dostarczenia');
            $table->date('data_zamownienia');
            $table->string('status_realizacji');
            $table->timestamps();
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
    }
};
