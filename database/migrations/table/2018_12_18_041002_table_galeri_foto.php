<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGaleriFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri_foto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('caption')->nullable();
            $table->string('namafile');
            $table->string('extension');
            $table->integer('kategori_foto_id')->unsigned()->default(1);
            $table->foreign('kategori_foto_id')->references('id')->on('kategori_foto')->onDelete('restrict');
            $table->integer('create_id')->nullable();
            $table->integer('update_id')->nullable();
            $table->integer('delete_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('galeri_foto');
    }
}
