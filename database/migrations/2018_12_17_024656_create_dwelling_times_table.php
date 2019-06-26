<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDwellingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwelling_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dt_id');
            $table->string('port');
            $table->string('terminal');
            $table->date('dwelling_date');
            $table->integer('dwelling_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dwelling_times');
    }
}
