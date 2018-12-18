<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGaleriVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri_video', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_video')->nullable();
            $table->string('link_video');
            $table->integer('kategori_video_id')->unsigned();
            $table->foreign('kategori_video_id')->references('id')->on('kategori_video')->onDelete('restrict');
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
        Schema::dropIfExists('galeri_video');
    }
}
