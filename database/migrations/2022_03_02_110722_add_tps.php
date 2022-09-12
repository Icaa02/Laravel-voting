<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kode_tps', function (Blueprint $table) {
            $table->dropColumn('no_tps');
            $table->string('tps', 50)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kode_tps', function (Blueprint $table) {
            $table->no_tps;
            $table->dropColumn('tps');
        });
    }
}
