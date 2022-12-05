<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nama_siswa')->unique();
            $table->string('kelas_siswa');
            $table->string('jurusan');
            $table->string('nisn')->unique();
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('wali_kelas')->unique();
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
        Schema::dropIfExists('siswas');
    }
};
