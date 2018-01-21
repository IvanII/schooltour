<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDateStartAndDateEndForRecreationBases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recreation_bases', function (Blueprint $table) {
            $table->dropColumn('date_start');
            $table->dropColumn('date_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recreation_bases', function (Blueprint $table) {
            $table->date('date_start');
            $table->date('date_end');
        });
    }
}
