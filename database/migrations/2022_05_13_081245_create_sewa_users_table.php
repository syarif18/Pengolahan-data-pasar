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
            $table->string('nomor_tempat');
            $table->string('ukuran');
            $table->string('nama');
            $table->integer('nik');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('jenis_jualan');
            $table->integer('nomor_hp');
            $table->string('status_lapak')->nullable();
            $table->string('gambar_paspoto')->nullable();
            $table->string('gambar_ktp')->nullable();;
            $table->string('gambar_kk')->nullable();;
            $table->string('tahun_masuk')->nullable();
            $table->string('tahun_keluar')->nullable();
            $table->string('konfirmasi')->default('0');
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
