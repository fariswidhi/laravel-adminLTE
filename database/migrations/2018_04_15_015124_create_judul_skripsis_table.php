<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudulSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judul_skripsis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mahasiswa');
            $table->string('judul');
            $table->date('tgl_masuk');
            $table->integer('tahun');

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
        Schema::dropIfExists('judul_skripsis');
    }
}
