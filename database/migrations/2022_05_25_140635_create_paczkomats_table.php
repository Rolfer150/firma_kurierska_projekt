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
        Schema::dropIfExists('paczkomats');
    }
};
