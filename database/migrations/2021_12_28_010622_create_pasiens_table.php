<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->integer('no_identitas');
            $table->integer('Nik');
            $table->unsignedBigInteger('id_KepalaKeluarga');
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->integer('no_telpon');
            $table->timestamps();
            $table->foreign('id_KepalaKeluarga')->references('id')->on('kepala_keluargas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
