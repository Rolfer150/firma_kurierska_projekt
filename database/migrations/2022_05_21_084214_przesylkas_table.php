<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /*

    /**
     * Run the migrations.
     *
     * @return void
     */

    /*

/*
* Run the migrations.
*
* @return void
*/

    public function up()
    {
        Schema::create('przesylkas', function (Blueprint $table) {
            $table->id();
            $table->decimal('cena');
            $table->date('data_dostarczenia');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /*

/*
* Reverse the migrations.
*
* @return void
*/


    public function down()
    {
        Schema::dropIfExists('przesylkas');
    }



};
