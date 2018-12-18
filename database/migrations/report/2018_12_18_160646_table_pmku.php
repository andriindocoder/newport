<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePmku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_siup')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('nomor_akta')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('file_npwp')->nullable();
            $table->string('file_struktur')->nullable();
            $table->string('file_siup')->nullable();
            $table->string('file_akta')->nullable();
            $table->string('file_domisili')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('telepon',100)->nullable();
            $table->string('hotline',100)->nullable();
            $table->string('fax',100)->nullable();
            $table->string('badan_usaha')->nullable();
            $table->date('tanggal_siup')->nullable();
            $table->integer('tempat_kantor')->nullable();
            $table->integer('jenis_usaha_id')->unsigned();
            $table->foreign('jenis_usaha_id')->references('id')->on('jenis_usaha')->onDelete('restrict');
            $table->integer('wilayah_id')->unsigned();
            $table->foreign('wilayah_id')->references('id')->on('wilayah')->onDelete('restrict');
            $table->integer('create_id')->nullable();
            $table->integer('update_id')->nullable();
            $table->integer('delete_id')->nullable();
            $table->integer('status_registrasi')->default(1);
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
        Schema::dropIfExists('pmku');
    }
}
