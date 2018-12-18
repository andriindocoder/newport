<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableInformasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_informasi_id')->unsigned();
            $table->foreign('jenis_informasi_id')->references('id')->on('jenis_informasi')->onDelete('restrict');
            $table->text('judul_informasi');
            $table->text('konten')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('informasi');
    }
}
