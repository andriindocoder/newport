<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePelayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_pelayanan_id')->unsigned();
            $table->foreign('jenis_pelayanan_id')->references('id')->on('jenis_pelayanan')->onDelete('restrict');
            $table->integer('pmku_id')->unsigned();
            $table->foreign('pmku_id')->references('id')->on('pmku')->onDelete('restrict');
            $table->string('no_pelayanan');
            $table->integer('status_pelayanan')->default(1);
            $table->string('gambar')->nullable();
            $table->text('konten')->nullable();
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
        Schema::dropIfExists('pelayanan');
    }
}
