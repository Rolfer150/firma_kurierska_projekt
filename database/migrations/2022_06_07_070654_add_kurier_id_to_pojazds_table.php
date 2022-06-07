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
        Schema::table('pojazds', function (Blueprint $table) {
            $table->unsignedBigInteger('kurier_id')->nullable()->after('id_pojazdu');
            $table->foreign('kurier_id')->references('id_pojazdu')->on('pojazds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pojazds', function (Blueprint $table) {
            //
        });
    }
};
