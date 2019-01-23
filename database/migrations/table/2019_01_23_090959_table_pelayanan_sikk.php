<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePelayananSikk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan_sikk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_pelayanan')->nullable();
            $table->string('keterangan_peta')->nullable();
            $table->string('rencana_kedalaman')->nullable();
            $table->string('volume')->nullable();
            $table->string('file_lokasi')->nullable();
            $table->string('file_peta')->nullable();
            $table->string('file_rekomendasi')->nullable();
            $table->string('file_distrik_navigasi')->nullable();
            $table->string('file_rekomendasi_syahbandar')->nullable();
            $table->text('keterangan_lokasi')->nullable();
            $table->text('maksud_tujuan')->nullable();
            $table->text('balasan')->nullable();
            $table->integer('create_id')->nullable();
            $table->integer('update_id')->nullable();
            $table->integer('delete_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('status_aktif')->default(1);
            $table->tinyInteger('status_pelayanan')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanan_sikk');
    }
}
