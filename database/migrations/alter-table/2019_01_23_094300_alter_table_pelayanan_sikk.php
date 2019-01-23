<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePelayananSikk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelayanan_sikk', function (Blueprint $table) {
            $table->integer('jenis_pelayanan_id')->unsigned()->default(1);
            $table->foreign('jenis_pelayanan_id')->references('id')->on('jenis_pelayanan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelayanan_sikk', function (Blueprint $table) {
            //
        });
    }
}
