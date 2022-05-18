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
        Schema::table('kuriers', function (Blueprint $table) {
            $table->unsignedBigInteger('pojazd_id')->nullable()->after('email_kuriera');
            $table->foreign('pojazd_id')->references('id_pojazdu')->on('pojazds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kuriers', function (Blueprint $table) {
            $table->dropForeign('kuriers_pojazd_id_foreign');
            $table->dropColumn('pojazd_id');
        });
    }
};
