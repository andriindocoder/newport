<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePpid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ppid');
            $table->string('nama_lengkap');
            $table->string('alamat',500)->nullable();
            $table->string('pekerjaan')->nullable();
            $table->integer('jenis_id');
            $table->string('nomor_id');
            $table->string('email');
            $table->string('telepon')->nullable();
            $table->text('rincian_info')->nullable();
            $table->text('tujuan_info')->nullable();
            $table->integer('cara_info')->nullable();
            $table->integer('cara_salinan')->nullable();
            $table->string('file_berkas')->nullable();
            $table->integer('status_ppid')->default(1);
            $table->text('balasan')->nullable();
            $table->string('file_balasan')->nullable();
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
        Schema::dropIfExists('ppid');
    }
}
