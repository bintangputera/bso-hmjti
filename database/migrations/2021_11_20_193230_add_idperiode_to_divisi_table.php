<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdperiodeToDivisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('divisi', function (Blueprint $table) {
            $table->bigInteger('periode_id', false, true);
            $table->foreign('periode_id')->references('id')->on('periode')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisi', function (Blueprint $table) {
            $table->dropColumn('periode_id');
        });
    }
}
