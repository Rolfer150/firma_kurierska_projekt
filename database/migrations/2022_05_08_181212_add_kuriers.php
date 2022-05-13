<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
    /*
=======
>>>>>>> dd39b74d83ed085946e9f249ac796f497d3f9cd3
    /**
     * Run the migrations.
     *
     * @return void
<<<<<<< HEAD
     /*
=======
     */
>>>>>>> dd39b74d83ed085946e9f249ac796f497d3f9cd3
    public function up()
    {
        Schema::create('kuriers', function (Blueprint $table) {
            $table->id('id_kuriera');
            $table->string('imie_kuriera');
            $table->string('nazwisko_kuriera');
            $table->integer('nr_tel_kuriera');
            $table->string('email_kuriera')->unique();
            $table->timestamp('email_verified_at_kurier')->nullable();
            $table->string('haslo_kurier');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    /*
=======
>>>>>>> dd39b74d83ed085946e9f249ac796f497d3f9cd3
    public function down()
    {
        Schema::dropIfExists('kuriers');
    }
<<<<<<< HEAD
    */
=======
>>>>>>> dd39b74d83ed085946e9f249ac796f497d3f9cd3
};
