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
        Schema::table('data_absensi', function (Blueprint $table) {
            $table->dropForeign(['pegawai_id']);
            $table->foreign('pegawai_id')->references('id')->on('data_pegawai')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_absensi', function (Blueprint $table) {
            //
        });
    }
};
