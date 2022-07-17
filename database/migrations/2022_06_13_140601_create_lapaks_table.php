<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('jenis_tempat');
            $table->string('ukuran_tempat');
            $table->string('jumlah_tempat');
            $table->string('tempat_kosong');
            $table->string('harga');
            $table->string('gambar1')->nullable();
            // $table->string('gambar2')->nullable();
            // $table->string('gambar3')->nullable();
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
        Schema::dropIfExists('lapaks');
    }
}
