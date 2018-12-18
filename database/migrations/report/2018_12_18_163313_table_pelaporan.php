<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePelaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_pelaporan_id')->unsigned();
            $table->foreign('jenis_pelaporan_id')->references('id')->on('jenis_pelaporan')->onDelete('restrict');
            $table->integer('pmku_id')->unsigned();
            $table->foreign('pmku_id')->references('id')->on('pmku')->onDelete('restrict');
            $table->string('no_pelaporan');
            $table->integer('status_pelaporan')->default(1);
            $table->string('judul_laporan')->nullable();
            $table->text('konten')->nullable();
            $table->string('gambar')->nullable();
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();
            $table->text('balasan')->nullable();
            $table->integer('create_id')->nullable();
            $table->integer('update_id')->nullable();
            $table->integer('delete_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->tinyInteger('status_aktif')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaporan');
    }
}
