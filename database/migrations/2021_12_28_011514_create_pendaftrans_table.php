<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftrans', function (Blueprint $table) {
            $table->id();
            $table->integer('Nik');
            $table->unsignedBigInteger('id_pasien');
            $table->string('Nama_pasien');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->integer('no_petugas');
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('pasiens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftrans');
    }
}
