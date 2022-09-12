<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldVisiMisiToKandidats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('visi_misi')->after('no_urut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->dropColumn('visi_misi');
        });
    }
}
