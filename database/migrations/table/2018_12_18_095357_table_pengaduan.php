<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePengaduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_pengaduan');
            $table->string('nama');
            $table->string('email');
            $table->string('instansi')->nullable();
            $table->text('alamat')->nullable();
            $table->text('pesan');
            $table->text('balasan')->nullable();
            $table->integer('status_pengaduan')->default(1);
            $table->string('jenis_id')->nullable();
            $table->string('nomor_id')->nullable();
            $table->string('namafile')->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
}
