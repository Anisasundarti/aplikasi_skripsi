<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kelurahan');
            $table->unsignedInteger('kecamatan_id')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kelurahans');
    }
}
