<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiKejahatansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_kejahatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jenis_kejahatan');
            $table->string('alamat');
            $table->longtext('deskripsi');
            $table->string('tahun_kejadian');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lokasi_kejahatans');
    }
}
