<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nama')->nullable();
            $table->string('level');
            // $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nm_pasar')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('nip')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('j_kelamin')->nullable();
            $table->string('almt')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('foto')->nullable();
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
