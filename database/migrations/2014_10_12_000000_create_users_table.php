<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            // jika admin namanya ada
            // jika lainnya null
            $table->string('nama')->nullable();
            $table->text('alamat');
            $table->string('telp');
            // id mahasiswa/dosen/kaprodi, jika null maka dia admin
            $table->integer('id_user')->nullable();
            $table->integer('status');
            // 0 = admin
            // 1 = dosen
            // 2 = mahasiswa
            // 3 = kaprodi
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
