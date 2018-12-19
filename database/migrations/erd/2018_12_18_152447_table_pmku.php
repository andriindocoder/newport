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
        Schema::dropIfExists('pmku');
    }
}
