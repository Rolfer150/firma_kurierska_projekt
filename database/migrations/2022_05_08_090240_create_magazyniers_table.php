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
        Schema::create('magazyniers', function (Blueprint $table) {
            $table->id('id_magazyniera');
            $table->string('imie_magazyniera');
            $table->string('nazwisko_magazyniera');
            $table->integer('nr_tel_magazyniera');
            $table->string('email_magazyniera')->unique();
            $table->timestamp('email_verified_at_magazynier')->nullable();
            $table->string('haslo_magazynier');
            $table->rememberToken();
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
        Schema::dropIfExists('magazyniers');
    }
};
