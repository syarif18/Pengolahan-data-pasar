<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasar');
            $table->string('jenis_tempat');
            $table->string('nama');
            $table->string('nik');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('jenis_jualan');
            $table->string('nomor_hp');
            $table->string('gambar_paspoto');
            $table->string('gambar_ktp');
            $table->string('gambar_kk');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('sewa_users');
    }
}
